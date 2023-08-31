<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(10)->create();
        Author::factory(10)->create();
        $genres = Genre::factory(15)->create();
        $books = Book::factory(10)->create();

        foreach ($books as $book){
            $bookIds = $genres->random(5)->pluck('id');
            $book->genres()->attach($bookIds);
        }
    }
}
