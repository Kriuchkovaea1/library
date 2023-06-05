<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(){
        return view('admin.genre.create');
    }
}
