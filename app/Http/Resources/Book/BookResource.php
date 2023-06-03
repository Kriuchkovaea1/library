<?php

namespace App\Http\Resources\Book;

use App\Http\Resources\Book\BookAuthorResource;
use App\Http\Resources\Genre\GenreBookResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'authors' => new BookAuthorResource($this->authors),
            'genres' => GenreBookResource::collection($this->genres),
            'created_at' => $this->created_at->format('d.m.y'),
        ];
    }
}
