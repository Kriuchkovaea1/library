<?php

namespace App\Http\Controllers\API\Books;

use App\Http\Controllers\Admin\Book\BaseController;
use App\Http\Requests\Admin\Book\Update2Request;
use App\Http\Resources\Book\BookResource;
use App\Models\Book;
use Illuminate\Support\Facades\Log;


class UpdateController extends BaseController
{
    public function update(Update2Request $request, Book $book): BookResource
    {
        Log::info('Книга обновлена:', (array)$book);
        $data = $request->validated();
        $book = $this->service->update($data, $book);
        return new BookResource($book);
        //return response()->json($book, 200);
    }
}
