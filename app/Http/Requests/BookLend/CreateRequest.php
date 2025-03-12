<?php

namespace App\Http\Requests\BookLend;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'uuid|unique:books,id|string',
            'title' => 'required|unique:books,id|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'date_publish' => 'required|date|string',
            'categories_id' => 'required|exists:categories,id|integer',
            'stock' => 'required|integer',
            'page' => 'required|integer',
            'description' => 'required|string'
        ];
    }
}
