<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;

class SearchController extends BaseController
{
    public function search(Author $authors, Genre $genres)
    {
        $books = Book::with('authors')->get();
        return view('admin.book.index', compact('books', 'authors', 'genres'));
    }
}
