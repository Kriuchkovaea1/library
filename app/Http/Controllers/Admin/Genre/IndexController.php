<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return view('admin.genre.index', compact('genres'));
    }
}
