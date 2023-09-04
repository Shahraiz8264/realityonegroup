<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use Auth;
class Category extends BaseModel
{
    use HasFactory;
    protected $table= 'categories';

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope('active_catogories', function (Builder $builder) {
            $user = Auth::user();
            if(isset($user) && !$user->hasRole('admin')){
                $builder->where('categories.is_delete', '=', 0);
            }else{
                $builder->where('categories.is_delete', '=', 0)->where('categories.is_active','=',1);
            }
           
        });
    }

    protected $fillable = [
        'category_id','name','image_url','description','slug','is_active','is_delete',
    ];

    public function setSlugAttribute(){
        $this->slug = preg_replace('/[^a-zA-Z0-9]','-',strtolower($this->name));
    }

    public function parentCategory(){
        return $this->belongsTo(self::class,'category_id')->withDefault([
            'name' => 'NULL',
        ]);
    }

    public function childCategory(){
        return $this->hasMany(self::class,'category_id');
    }

    
}
