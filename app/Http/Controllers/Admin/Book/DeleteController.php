<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function delete(Book $book){
        $book -> delete();
        return redirect()->route('admin.book.index', compact('book'));
    }
}
