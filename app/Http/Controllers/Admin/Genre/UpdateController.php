<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Genre\UpdateRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Genre $genre){
        $data = $request->validated();
        $genre -> update($data);
        return view('admin.genre.show', compact('genre'));
    }
}
