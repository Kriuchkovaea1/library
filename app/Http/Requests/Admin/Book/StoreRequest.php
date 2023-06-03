<?php

namespace App\Http\Requests\Admin\Book;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|unique:books,name',
            'author_id'=>'required|integer|exists:authors,id',
            'genre_ids'=>'nullable|array',
            'genre_ids.*'=>'integer|exists:genres,id',
        ];
    }

    public function messages()
    {
        return [
            'name.unique'=>'Книга с таким названием уже существует',
            'name.required'=>'Поле необходимо для заполнения',
        ];
    }
}
