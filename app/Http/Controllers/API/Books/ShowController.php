<?php

namespace App\Http\Controllers\API\Books;

use App\Http\Controllers\Controller;
use App\Http\Resources\Author\AuthorResource;
use App\Http\Resources\Book\BookResource;
use App\Http\Resources\GenreCollection;
use App\Models\Book;

class ShowController extends Controller
{
    public function show(Book $book)
    {
        return BookResource::collection(Book::find($book));
       // $book = Book::with('authors')->findOrFail($id);
        //return new BookResource($book);
    }
}
