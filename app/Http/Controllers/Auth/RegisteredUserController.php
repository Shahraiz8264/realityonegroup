<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Models\BaseModel;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use DB;
use Mail;

class RegisteredUserController extends BaseController
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(BaseModel $baseModel)
    {
        $Roles = $baseModel->getAllRoles();
        return view('auth.register', [
            'title' => trans('lang.sign-up'),
            'Roles' => $Roles
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {

        try {

            DB::beginTransaction();
            $data = $request->all();
            $user = User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            DB::commit();

            // $user
            $user = User::find($user->id);
            $user->assignRole($request->role_id);

            if ($request->role_id == 2) {
                $data = $request->except('_token', 'username', 'password', 'role_id', 'password_confirmation', 'term_cond');
                $data['user_id'] = $user->id;

                $user->addInnovator($data);
            } else if ($request->role_id == 3) {
                $data = $request->except('_token', 'username', 'password', 'role_id', 'password_confirmation', 'term_cond', 'dob');
                $data['user_id'] = $user->id;
                $user->addCompany($data);
            }
            DB::commit();
            // event(new Registered($user));
            // $userEmail = User::where('id', 84)->first();
            Auth::login($user);
            $User = auth()->user();
            $User['type'] = auth()->user()->{auth()->user()->roles[0]->name};
            return $this->sendResponse([
                'route' => route('congrats'),
                'dasboard' => prefix_route('dashboard'),
                'user' => json_encode($User),
            ], trans('messages.register_successfully'));
        } catch (\Exception $e) {
            DB::rollBack();
            // User::find($user->id)->delete();
            Log::error($e);
            return $this->sendError('Error while inserting (' . $e->getMessage() . ')');
        }
    }
}
