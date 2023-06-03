<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(Genre $genre)
    {
        return view('admin.genre.edit', compact('genre'));
    }
}
