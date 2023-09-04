<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Newsletter extends BaseModel
{
    use HasFactory;
    protected $fillable = ['email'];
}
