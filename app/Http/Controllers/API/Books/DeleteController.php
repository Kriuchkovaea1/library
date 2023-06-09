<?php

namespace App\Http\Controllers\API\Books;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\UpdateRequest;
use App\Http\Resources\GenreCollection;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DeleteController extends Controller
{
    public function destroy(Book $book, $id)
    {
        Log::info('Книга удалена:', (array)$book);
        return Book::destroy($id);
    }
}
