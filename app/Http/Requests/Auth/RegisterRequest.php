<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'username' => ['required',config('constant.form_attributes.username.min'),config('constant.form_attributes.username.max'),config('constant.form_attributes.username.regex'),'unique:users,username'],
            'first_name' => ['required',config('constant.form_attributes.name.min'),config('constant.form_attributes.name.max'),config('constant.form_attributes.name.regex'),],
            'last_name' => ['required_if:role_id,=,2','nullable',config('constant.form_attributes.name.min'),config('constant.form_attributes.name.max'),config('constant.form_attributes.name.regex'),],
            'role_id' => ['required','integer','exists_in'],
            'password' => ['required', 'confirmed', config('constant.form_attributes.password.max'),Rules\Password::min(config('constant.form_attributes.password.min'))
            ->mixedCase()
            ->letters(1)
            ->numbers(1)
            ->symbols(1)],
            'email' => ['required','unique:users,email','email',config('constant.form_attributes.email.min'),config('constant.form_attributes.email.max'),'email_not_in:role_id'],
            'dob' => ['required_if:role_id,=,2','eighteen_plus:role_id'],
        ];
    }

    public function messages(){
        return [
            'username.regex' => trans('validation.custom.username.regex',['attribute' => trans('lang.name')]),
            'first_name.regex' => trans('validation.custom.name.regex',['attribute' => trans('lang.name')]),
            'email.regex' => trans('validation.email',['attribute' => trans('lang.email')]),
            'last_name.regex' => trans('validation.custom.name.regex',['attribute' => trans('lang.name')]),
            'role_id.integer' => trans('validation.custom.integer',['attribute' => trans('lang.role')]),
            'dob.required_if' => trans('validation.required',['attribute' => 'Date of birth']),
        ];
    }
}
