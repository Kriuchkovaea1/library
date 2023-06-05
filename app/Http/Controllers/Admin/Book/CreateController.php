<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CreateController extends BaseController
{
    public function create(Author $authors, Genre $genres){

        $genres = Genre::all();
        $authors = Author::all();
        return view('admin.book.create', compact('authors', 'genres'));
    }
}
