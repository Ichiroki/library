<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BookCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($book) {
                return [
                    'id' => $this->id,
                    'title' => $this->title,
                    'author' => $this->author,
                    'publisher' => $this->publisher,
                    'date_publish' => $this->date_publish,
                    'categories_id' => $this->categories_id,
                    'stock' => $this->stock,
                    'page' => $this->page,
                    'description' => $this->description
                ];
            }),
            'meta' => [
                'total_books' => $this->collection->count()
            ]
        ];
    }
}
