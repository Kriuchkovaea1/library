<?php

namespace App\Http\Controllers\Admin\Book;


use App\Http\Filters\BookFilter;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Carbon\Carbon;
use Kyslik\ColumnSortable\Sortable;

class IndexController extends BaseController
{
    public function index(Book $books, BookFilter $request)
    {
        $date = Carbon::parse($books->created_at);
        $books = Book::filter($request)->Sortable()->with('authors', 'genres')->get();
        $authors = Author::all();
        $genres = Genre::all();
        return view('admin.book.index', compact('books', 'date', 'authors', 'genres'));
    }
}
