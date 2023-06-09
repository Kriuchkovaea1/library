<?php

namespace App\Http\Controllers\API\Authors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\UpdateRequest;
use App\Http\Resources\Author\AuthorResource;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function update(UpdateRequest $request, Author $author)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();
            $author->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            abort(500);
        }
        return new AuthorResource($author);
    }
}
