<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\BaseModel;
use App\Models\ContactForm;
use App\Models\Newsletter;
use App\Helpers\Helper;
use App\Traits\Validation;
use App\Mail\ContactUs;
use App\Models\Media;
use Pusher\Pusher;
use DB;

class BaseController extends Controller
{
    //
    // use Validation;
    private $baseModel,$contactForm,$newsletter,$Media;
    private $model;

    public function __construct(BaseModel $baseModel,Newsletter $newsletter,ContactForm $contactForm){
        $this->baseModel = $baseModel;
        $this->contactForm = $contactForm;
        $this->newsletter = $newsletter;
        
        
    }

    public function setModel(BaseModel $model){
        $this->model = $model;
    }

    

    public function setMedia(Media $media){
        $this->Media = $media;
    }
    public function getModel(){
        return $this->model;
    }
    public function setGeneralFilters(Request $request)
    {
        $this->model->setLength($request->has('length') ? $request->length : 10);
        $this->model->setStart($request->has('start') ? $request->start : 1);
        $this->model->setOrderBy($request->has('orderBy') ? $request->orderBy : 'created_at');
        $this->model->setOrder($request->has('order') ? $request->order : 'desc');
    }

    public function sendResponse($result = [], $message = '')
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
            'fields' => [],
        ];

        return response()->json($response, 200);
    }

    public function sendError($error = '', $errorMessages = [], $code = 400, $data = [])
    {
        $response = [
            'success' => false,
            'message' => $error,
            'data' => $data,
            'fields' => (!empty($errorMessages) ? $errorMessages : [])
        ];

        return response()->json($response, $code);
    }
// Subscribe for newsletter
    public function newsletterSubscription(Request $request){
        $request->validate([
            'email' => 'required|email|unique:email'
        ]);

        $response =$this->newsLetter->store($request->except('_token'));
        if($response){
            return $this->sendResponse([],trans('messages.success_msg',['action' => trans('lang.subscribed')]));
        }
        return $this->sendError(trans('messages.error_msg',['action' => trans('lang.subscribing')]));
    }
// Contact us form
    public function saveContactForm(Request $request){
        if(isset($request->project)){
            $request->validate([
                'first_name' => 'required',
                'phone' => 'required',
                'city' => 'required',
                'email' => 'required|email',
                'project' =>'required',
                'message' => 'required'
            ]);
        }else{
            $request->validate([
                'first_name' => 'required',
                'phone' => 'required',
                'city' => 'required',
                'email' => 'required|email',
                // 'property_id' =>'required|integer|exists:properties,id',
                'message' => 'required'
            ]);
        }
            
        
       
        $response = $this->contactForm->store($request->except('_token'));
        $response = $this->contactForm->find($response);
        if($response){
            $message = Helper::sendMail(env('MAIL_FROM_ADDRESS'),new Contactus($response));
            if($message ==""){
                return $this->sendResponse([],'Your response has been '.trans('messages.success_msg',['action' => trans('lang.save')]));
            }else{
                return $this->sendResponse([],$message);
            }
            
        }
        return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
    }
// Render Table
    public function render(Request $request){
        try{
            $response = [];
            $this->setGeneralFilters($request);
            $response = $this->model->getRecordDataTable($request);  
            return $this->sendResponse($response);
        }catch(\Exception $e){
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
        
    }
// destroy
    public function destroy(Request $request,$id){
        try{
            DB::beginTransaction();
                $this->model->destroyByid($id);
            DB::commit();
            return $this->sendResponse([],'Your data has been '.trans('messages.delete_msg',['action' => trans('lang.delete')]));
        }catch(Exception $e){
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
// Store
    public function store(Request $request){
        $request->validate($this->model->getRule());
        
        try {
            DB::beginTransaction();
            $data = $request->except('_token'); 
            $result = $this->model->store($data);
            //DB::commit();
            if ($request->has('media')) {
                //$response = Helper::saveMedia($request->image,$this->model->class_name,$result->id);  
                
                foreach($request->media as $media){
                   // dd($this->Media);
                    $this->Media->updateByColumn([
                        'model_id' => $result,
                        'model' => $this->model->class_name,
                    ],$media);
                    
                }
            }
            DB::commit();
            return $this->sendResponse([], trans('messages.success_msg', ['action' => trans('lang.saved')]));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
// Update
    public function update(Request $request,$id){
        $request->validate($this->model->getRule());
        try {
            DB::beginTransaction();
            $data = $request->except(['_token','media','gallery']);
            
            $this->model->updateByColumn($data,$id);
            if ($request->has('media')) {
                
                foreach($request->media as $media){
                   
                    $this->Media->updateByColumn([
                        'model_id' => $id,
                        'model' => $this->model->class_name,
                    ],$media);
                    
                }
            }
            DB::commit();
            return $this->sendResponse([], trans('messages.success_msg', ['action' => trans('lang.updated')]));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
// Get
    public function get(Request $request,$id){
        $result = $this->model->first('id',$id);
        //dd($result);
        return $result;
    }
// Save files
    public function saveFiles(Request $request){
        $media = 0;
        
        if (isset($request->files)) { 
            
            $media =  Helper::saveMedia($request->files,$this->model);      
            //dd($media);
            return $media->id;
        }
        return true;
    }

    public function deleteFile(Request $request,$id){
        //dd($request->files);
        try{
            DB::beginTransaction();
            $response = $this->Media->find($id);
            Helper::unlinkFile($response->image_url);
            $this->Media->destroyById($id);
            DB::commit();
            return $this->sendResponse([],'Your data has been '.trans('messages.delete_msg',['action' => trans('lang.delete')]));
            
        }catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
        
        
    }
}
