<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function index(Book $book)
    {
        $genres = Genre::all();
        $authors = Author::all();
        return view('admin.book.edit', compact('book', 'authors', 'genres'));
    }
}
