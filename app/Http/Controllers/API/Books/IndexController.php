<?php

namespace App\Http\Controllers\API\Books;

use App\Http\Controllers\Controller;
use App\Http\Resources\Book\BookResource;
use App\Models\Book;

class IndexController extends Controller
{
    public function index()
    {
        $book = Book::paginate(10);
        return BookResource::collection($book);
    }
}
