<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Footer;

class FooterController extends BaseController
{
    //
    private $header;
    public function __construct(Footer $footer){
        $this->footer = $footer;
        $this->setModel($this->footer);
    }
    
    public function index(Request $request){
        return view('admin.crud.index',[
            'title' => trans('lang.footers'),
            'name' => 'footers',
        ]);
    }
    public function render(Request $request){
        
        $response = parent::render($request); 
        return $response;
    }
    public function store(Request $request){
        
        $response = parent::store($request); 
        return $response;  
    }
    public function create(Request $request){
        return view('admin.crud.create',[
            'title' => trans('lang.footers').' | '.trans('lang.create'),
            'name' => 'footers',
        ]);
    }
    public function update(Request $request,$id){
        
        $response = parent::update($request,$id); 
        return $response; 
    }
    public function get(Request $request,$id){
        
        $Page = parent::get($request,$id);
        return $this->sendResponse($Page);
    }
    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.footers').' | '.trans('lang.edit'),
            'name' => 'footer',
        ]);
    }
}
