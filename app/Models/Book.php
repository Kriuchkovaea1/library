<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;


class Book extends Model
{
    use HasFactory, Sortable, Filterable;
    use SoftDeletes;

    protected $table = 'books';
    protected $guarded = [];
    public array $sortable = ['id', 'name'];
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genres', 'book_id', 'genre_id');
    }
    public function authors(){
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
    protected $allowedSorts = [
        'name'
    ];


}

