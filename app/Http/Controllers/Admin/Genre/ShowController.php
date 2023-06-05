<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(Genre $genre){
        return view('admin.genre.show', compact('genre'));
    }
}
