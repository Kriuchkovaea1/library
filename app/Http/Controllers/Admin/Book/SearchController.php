<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Requests\Admin\Book\StoreRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Carbon\Carbon;

class SearchController extends BaseController
{
    public function search(StoreRequest $storeRequest, Author $authors, Book $books, Genre $genres)
    {
        /*$search = $storeRequest->search;
        $date = Carbon::parse($books->created_at);
        $books = Book::where('name', 'LIKE', "%$search%")->orderBy('name')->with('authors')->get();*/
        $books = Book::with('authors')->get();
        return view('admin.book.index', compact('books', 'authors', 'genres'));
    }
}
