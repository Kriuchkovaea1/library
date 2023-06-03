<?php

namespace App\Http\Filters;

class BookFilter extends QueryFilter
{
    public function authorId($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('author_id', $id);
        });
    }
    public function genreIds($id = null){
        return $this->builder->whereHas('genres', function($query) use($id){
            $query->whereIn('genre_id', $id);
        });
    }
    public function search($search_string = ''){
        return $this->builder
            ->where('name', 'LIKE', '%'.$search_string.'%');
    }
}
