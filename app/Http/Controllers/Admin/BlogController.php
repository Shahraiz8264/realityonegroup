<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Blog;
use App\Models\Media;

class BlogController extends BaseController
{
    //
    private $blog;
    public function __construct(Blog $blog,Media $media) {
        $this->blog = $blog;
        $this->setModel($blog);
        $this->setMedia($media);
       
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.developers'),
             'name'  => trans('lang.developer'),
        ]);
    }

    public function create(Request $request){
        return view('admin.crud.create',[
            'title' => trans('lang.blog').' | '.trans('lang.create'),
            'name' => 'page',
        ]);
    }

    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.blog').' | '.trans('lang.edit'),
            'name' => 'property',
        ]);
    }
}
