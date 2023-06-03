<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Book $books){
        $authors = Author::withCount('books')->get();
        return view('admin.author.index', compact('authors', 'books'));
    }
}
