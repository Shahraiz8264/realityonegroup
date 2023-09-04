<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class LayoutController extends BaseController
{
    //
    public function getLayoutPublic(Request $request){
        return $this->sendResponse([
            [
                "text"  => "LayOutV1",
                "id" => 0
            ],
            [
                "text"  => "LayOutV1",
                "id" => 1
            ]
        ]);
    }
}
