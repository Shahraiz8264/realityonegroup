<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class CustomForm extends BaseModel
{
    use HasFactory;

    protected $table = 'custom_forms';
    protected $fillable = ['name','slug','form_data'];
}
