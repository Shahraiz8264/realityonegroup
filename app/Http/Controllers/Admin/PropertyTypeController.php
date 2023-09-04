<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\PropertyType;
use App\Models\Media;
use DB;
use Log;

class PropertyTypeController extends BaseController
{
    //
    private $propertyType;
    public function __construct(PropertyType $propertyType) {
        $this->propertyType = $propertyType;
        $this->setModel($propertyType);
        //parent::__construct();
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.property_types'),
             'name'  => trans('lang.property_types'),
        ]);
    }

    public function getSelectRecords(Request $request){
        $result = $this->propertyType->getRecodsForSelect();
        return $this->sendResponse($result);
    }
}
