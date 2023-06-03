<?php

namespace App\Http\Controllers\API\Genres;

use App\Http\Controllers\Controller;
use App\Http\Resources\Genre\GenreResource;
use App\Models\Book;
use App\Models\Genre;

class IndexController extends Controller
{
    public function index(Book $book)
    {
        //$books = Book::all();
        //$book->genres->pluck('id')->toArray();
        $genre = Genre::with('books')->paginate(10);
        return GenreResource::collection($genre);
       // return $genre;
    }
}
