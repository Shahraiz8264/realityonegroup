<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Property;
use App\Models\Media;
use DB;
use Log;

class PropertyController extends BaseController
{
    //
    private $property,$media;
    public function __construct(Property $property,Media $media) {
        $this->property = $property;
        $this->setModel($property);
        $this->setMedia($media);
        //parent::__construct();
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.properties'),
             'name'  => trans('lang.property'),
        ]);
    }

    public function create(Request $request){
        return view('admin.crud.create',[
            'title' => trans('lang.properties').' | '.trans('lang.create'),
            'name' => 'page',
        ]);
    }

     public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.properties').' | '.trans('lang.edit'),
            'name' => 'property',
        ]);
    }
// Buy and Sell
    public function buyAndSell(Request $request){
        try{
            $condition = [];
            $result = [];
            
            $this->setGeneralFilters($request);
            $this->property->setSelectedColumn(['id','name','slug','address','area','price','city','developer','type','category']);

            $this->property->setRenderColumn([
                [
                    'name' => 'id',
                    'db_name' => 'id',
                    'type' => 'integer',
                    'html' => false,
                ],
                [
                    'name' => 'name',
                    'type' => 'string',
                    'html' => false,
                    'link' => 'property',
                    'link_column' => 'slug',
                    
                ],
                [
                    'name' => 'slug',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'address',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'city',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'area',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'price',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'developer',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'type',
                    'type' => 'string',
                    'html' => false,

                ],
                [
                    'name' => 'category',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'media',
                    'type' => 'string',
                    'html' => false,
                ],
            ]);

        $result = $this->property->getAllDatatables(['media'],
        $this->property->getSelectedColumns(),
        [],'',[],'where');

        
        // dd($result);
        if($request->ajax()){
            return view('properties.ajax.properties',[
                'Properties' => $result,
                'request' => $request,
                'pageno' => $this->property->getStart()
            ]);
        }
            
        return view('properties.properties',[
            'title' => trans('lang.buy_rent'),
            'Properties' => $result,
            'request' => $request,
        ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            abort(404);
        }
        
    }

    public function buyAndSellLocations(Request $request){
        $this->setFilters($request);
            $this->property->setSelectedColumn(['id','name','lognitude','latitude','address']);

            $this->property->setRenderColumn([
                [
                    'name' => 'id',
                    'db_name' => 'id',
                    'type' => 'integer',
                    'html' => false,
                ],
                [
                    'name' => 'name',
                    'type' => 'string',
                    'html' => false,
                    'link' => 'property',
                    'link_column' => 'slug',
                    
                ],
                [
                    'name' => 'lognitude',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'latitude',
                    'type' => 'string',
                    'html' => false,
                ],
                [
                    'name' => 'address',
                    'type' => 'string',
                    'html' => false,
                ],
               
              
              
            ]);
            $result = [];
        $result = $this->property->getAllDatatables(['media'],
        $this->property->getSelectedColumns(),
        [],'',[],'where');

        
        
        if($request->ajax()){
            return $this->sendResponse($result);
        }
    }

    public function getProperty(Request $request,$slug){
        $Property = $this->property->first('properties.slug',$slug,'=',[],[['developers','properties.developer','=','developers.id'],['property_types','properties.type','=','property_types.id']],['properties.*','developers.name as Developer','property_types.name as PropertyType']);
        
        return view('properties.property',[
            'title' => __('lang.property'). '|' .$Property->name,
            'Property' => $Property
        ]);
    }

    public function setFilters(Request $request){
        $this->setGeneralFilters($request);
            if($request->has('search_city') && $request->search_city !=''){
                $this->property->setFilters(['city','like','%'.$request->search_city.'%']);    
            }

            if($request->has('search_location') && $request->search_location !=''){
                $this->property->setFilters(['address','like','%'.$request->search_location.'%']);    
            }

            if($request->has('search_developer') && $request->search_developer !=''){
                $this->property->setFilters(['developer','=',$request->search_developer]);    
            }
            if($request->has('search_type') && $request->search_type !=''){
                $this->property->setFilters(['type','=',$request->search_type]);    
            }
            if($request->has('search_min_price') && $request->search_min_price !=''){
                $this->property->setFilters(['price','>=',$request->search_min_price]);    
            }
            if($request->has('search_max_price') && $request->search_max_price !=''){
                $this->property->setFilters(['price','<=',$request->search_max_price]);    
            }
            if($request->has('search_min_area') && $request->search_min_area !=''){
                $this->property->setFilters(['area','>=',$request->search_min_area]);    
            }
            if($request->has('search_min_area') && $request->search_min_area !=''){
                $this->property->setFilters(['area','<=',$request->search_min_area]);    
            }
            if($request->has('category') && $request->category !=''){
                $this->property->setFilters(['category','like','%'.$request->category.'%']);    
            }

            return true;
    }

}
