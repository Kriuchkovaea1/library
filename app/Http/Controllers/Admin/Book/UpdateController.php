<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Requests\Admin\Book\UpdateRequest;
use App\Models\Book;

class UpdateController extends BaseController
{
    public function index(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $book = $this->service->update($data, $book);
        return view('admin.book.show', compact('book'));
    }
}
