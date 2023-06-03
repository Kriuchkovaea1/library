<?php

namespace App\Http\Controllers\API\Authors;

use App\Http\Controllers\Controller;
use App\Http\Resources\Author\AuthorResource;
use App\Models\Author;


class IndexController extends Controller
{
    public function index()
    {
        $author = Author::withCount('books')->get();
        return AuthorResource::collection($author);
    }
}
