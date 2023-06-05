<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\StoreRequest;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StoreController extends BaseController
{
    public function store(StoreRequest $request)
    {
        Log::info('Добавлена книга');
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.book.index');
    }
}
