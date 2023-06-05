<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function show(Book $book){
        return view('admin.book.show', compact('book'));
    }
}
