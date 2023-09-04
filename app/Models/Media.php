<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Media extends BaseModel 
{
    use HasFactory;
    protected $table = 'images';

    protected $fillable = ['model_id','model','image_url','is_delete'];

    
}
