<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Requests\Admin\Book\UpdateRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Log;

class UpdateController extends BaseController
{
    public function update(UpdateRequest $request, Book $book)
    {
        Log::info('Книга обновлена:', (array)$book);
        $data = $request->validated();
        $book = $this->service->update($data, $book);
        return view('admin.book.index', compact('book'));
    }
}
