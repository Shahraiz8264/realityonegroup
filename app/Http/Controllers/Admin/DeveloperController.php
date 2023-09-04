<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Developer;
use App\Models\Media;
use DB;
use Log;

class DeveloperController extends BaseController
{
    //
    private $developer;
    public function __construct(Developer $developer) {
        $this->developer = $developer;
        $this->setModel($developer);
        //parent::__construct();
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.developers'),
             'name'  => trans('lang.developer'),
        ]);
    }

    public function getSelectRecords(Request $request){
        $result = $this->developer->getRecodsForSelect();
        return $this->sendResponse($result);
    }

    // public function create(Request $request){
    //     return view('admin.crud.create',[
    //         'title' => trans('lang.pages').' | '.trans('lang.create'),
    //         'name' => 'page',
    //     ]);
    // }

    //  public function edit(Request $request){
    //     return view('admin.crud.edit',[
    //         'title' => trans('lang.properties').' | '.trans('lang.edit'),
    //         'name' => 'property',
    //     ]);
    // }
}
