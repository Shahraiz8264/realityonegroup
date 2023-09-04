<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\ContactForm;
use App\Models\Media;
use DB;
use Log;

class ContactFormController extends BaseController
{
    //
    private $contactForm;
    public function __construct(ContactForm $contactForm) {
        $this->contactForm = $contactForm;
        $this->setModel($contactForm);
        //parent::__construct();
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.queries'),
             'name'  => trans('lang.query'),
        ]);
    }
}
