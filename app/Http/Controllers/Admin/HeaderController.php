<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Header;

class HeaderController extends BaseController
{
    //
    private $header;
    public function __construct(Header $header){
        $this->header = $header;
        $this->setModel($this->header);
    }
    
    public function index(Request $request){
        return view('admin.crud.index',[
            'title' => trans('lang.headers'),
            'name' => 'headers',
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
            'title' => trans('lang.headers').' | '.trans('lang.create'),
            'name' => 'headers',
        ]);
    }
    public function update(Request $request,$id){
        
        $response = parent::update($request,$id); 
        return $response; 
    }
    public function get(Request $request,$id){
        
        $Header = parent::get($request,$id);
        return $this->sendResponse($Header);
    }
    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.headers').' | '.trans('lang.edit'),
            'name' => 'header',
        ]);
    }
}
