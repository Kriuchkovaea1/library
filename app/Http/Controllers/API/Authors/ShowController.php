<?php

namespace App\Http\Controllers\API\Authors;

use App\Http\Controllers\Controller;
use App\Http\Resources\Author\AuthorResource;
use App\Models\Author;


class ShowController extends Controller
{
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return new AuthorResource($author);
    }
}
