<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Genre $genre)
    {
        return view('admin.genre.edit', compact('genre'));
    }
}
