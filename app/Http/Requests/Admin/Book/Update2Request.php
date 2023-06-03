<?php

namespace App\Http\Requests\Admin\Book;


use Illuminate\Database\Eloquent\Relations\HasMany;

class Update2Request extends UpdateRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'author_id'=>'integer|exists:authors,id',
            'genre_ids'=>'nullable|array',
            'genre_ids.*'=>'integer|exists:genres,id',
        ];
    }

}
