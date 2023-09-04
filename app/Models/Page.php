<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use Auth;
class Page extends BaseModel
{
    use HasFactory;
    protected $fillable = ['name','slug','description','view','layout','has_custom_view','display_to_menu','is_active','is_delete','is_home_page'];
    public $class_name = 'App\Models\Page';
    protected $table = 'pages';

    private $rules = [
        'name' => 'required',
        'slug' => 'required',
        'view' =>  'required',
        'description' => 'required',
        'layout' => 'required',
        'display_to_menu' => 'required|min:0|max:1',
        'is_home_page' => 'required|min:0|max:1',
    ];

    //private $select_columns = 
    
    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope('active_pages', function (Builder $builder) {
            $user = Auth::user();
            if(isset($user) && !$user->hasRole('admin')){
                $builder->where('pages.is_delete', '=', 0);
            }else{
                $builder->where('pages.is_delete', '=', 0)->where('pages.is_active','=',1);
            }
           
        });
    }

    public function setSlugAttribute($slug)
    {

        if(isset($this->id)){
            $page = self::where('slug',$slug)->where('id','!=',$this->id)->first();
            $this->attributes['slug'] = $slug.'-'.((int)$this->id);
            return true;
        }
        $page = self::where('slug',$slug)->first();
        if(isset($page)){
            $this->attributes['slug'] = $slug.'-'.((int)$page->id+1);
            return true;
        }
        $this->attributes['slug'] = $slug;
        return true;
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['name','like','%'.$request->search.'%']);     
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','name','slug','view','is_active','display_to_menu','has_custom_view','created_at']);

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
                'html' => true,
                'link' => 'site-pages',
                'link_column' => 'slug',
                
            ],
            [
                'name' => 'slug',
                'type' => 'string',
                'html' => false,
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
            [
                'name' => 'display_to_menu',
                'type' => 'boolean',
                'html' => true,
                'condition_colum' => 'display_to_menu'
            ],

        ]);

        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),
        [],'is_delete');
            
        return $result;
    }

    public function getRule(){
        return $this->rules;
    }
}