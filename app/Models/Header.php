<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Header extends BaseModel
{
    use HasFactory;
    protected $fillable = ['name','view'];
    protected $table = 'headers';
    public $class_name = 'App\Models\Header';
    private $rules = [
        'name' => 'required',
        'view' =>  'required',
    ];


    public function getRule(){
        return $this->rules;
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['name','like','%'.$request->search.'%']);     
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','name','view','is_active','created_at']);

        $this->setRenderColumn([
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
                'link' => 'site-pages',
                'link_column' => 'slug',
                
            ],
            [
                'name' => 'view',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'created_at',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'is_active',
                'type' => 'boolean',
                'html' => false,
                
            ],
            [
                'name' => 'status',
                'type' => 'boolean',
                'html' => true,
                'condition_colum' => 'is_active'
            ],

        ]);

        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),
        [],'is_delete');
            
        return $result;
    }
}
