<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DeleteController extends BaseController
{
    public function destroy(Book $book){
        Log::info('Книга удалена:', (array)$book);
        $book -> delete();
        return redirect()->route('admin.book.index', compact('book'));
    }
}
