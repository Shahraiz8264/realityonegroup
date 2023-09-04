<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Page;
use App\Models\Header;
use App\Models\Footer;
use DB;
use Log;

class PageController extends BaseController
{
    //
    private $page;
  
    public function __construct(Page $page) {
        $this->page = $page;
        $this->setModel($this->page);
    }

    public function index(Request $request){
       return view('admin.crud.index',[
            'title' => trans('lang.pages'),
            'name'  => trans('lang.page'),
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
            'title' => trans('lang.pages').' | '.trans('lang.create'),
            'name' => 'page',
        ]);
    }

    public function update(Request $request,$id){
        
        $response = parent::update($request,$id); 
        return $response; 
    }

    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.pages').' | '.trans('lang.edit'),
            'name' => 'page',
        ]);
    }

    public function get(Request $request,$id){
        
        $Page = parent::get($request,$id);
        return $this->sendResponse($Page);
    }
    
    // public function destroy(Request $request,$id){
        
    //     $response = parent::destroy($request,$id); 
    //     return $response;
    // }

    
}
