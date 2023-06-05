<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Admin\Book\BaseController;

class CreateController extends BaseController
{
    public function create(){
        return view('admin.author.create');
    }
}
