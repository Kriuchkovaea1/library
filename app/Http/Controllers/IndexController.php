<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Admin\Book\BaseController;

class IndexController extends BaseController
{
    public function index(){
        return view('error');
    }
}
