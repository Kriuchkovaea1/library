<?php

namespace App\Service\BookService;

use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $genreIds = $data['genre_ids'];
            unset($data['genre_ids']);
            $book = Book::firstOrCreate($data);
            $book->genres()->attach($genreIds);
            DB::commit();
        } catch (\Exception $exception) {
            abort(500);
        }
    }

    public function update($data,$book)
    {
        try {
            DB::beginTransaction();
            $genreIds = $data['genre_ids'];
            unset($data['genre_ids']);
            $book = Book::firstOrCreate($data);
            $book->update($data);
            $book->genres()->sync($genreIds);
            DB::commit();
        } catch (\Exception $exception) {
            abort(500);
        }
        return $book;
    }
}
