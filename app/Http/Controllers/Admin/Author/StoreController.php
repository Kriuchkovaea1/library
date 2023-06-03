<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\StoreRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function store(StoreRequest $request){
        $data = $request -> validated();
        Author::firstOrCreate($data);
        return redirect()->route('admin.author.index');
    }
}
