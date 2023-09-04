<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Layout extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name','view','header_id','footer_id'];
    protected $table = 'layouts';

    private $rules = [
        'name' => 'required',
        'view' =>  'required',
        'header_id' => 'required|exists:headers,id',
        'footer_id' => 'required|exists:footers,id',
    ];


    public function getRule(){
        return $this->rules;
    }
}
