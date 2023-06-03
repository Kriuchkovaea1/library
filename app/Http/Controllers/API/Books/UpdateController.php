<?php

namespace App\Http\Controllers\API\Books;

use App\Http\Controllers\Admin\Book\BaseController;
use App\Http\Requests\Admin\Book\Update2Request;
use App\Http\Resources\Book\BookResource;
use App\Models\Book;


class UpdateController extends BaseController
{
    public function update(Update2Request $request, Book $book): BookResource
    {
        $data = $request->validated();
        $book = $this->service->update($data, $book);
        return new BookResource($book);
        //return response()->json($book, 200);
    }
}
