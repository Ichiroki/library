<?php

namespace Tests\Feature;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class BookCollectionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_do_data_books_can_be_inserted_and_output_them(): void
    {
        $randomNum = rand(3, 5);
        Book::create([
            'id' => Str::uuid(),
            'title' => fake()->words($randomNum, true),
            'author' => fake()->name(),
            'publisher' => fake()->userName(),
            'date_publish' => Carbon::create('1981', '7', '5'),
            'categories_id' => 2,
            'stock' => fake()->numberBetween(0, 200),
            'page' => fake()->numberBetween(0, 250),
            'description' => fake()->paragraphs($randomNum, true)
        ]);

        $response = $this->getJson('/data/books');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'title',
                    'author',
                    'publisher',
                    'date_publish',
                    'categories_id',
                    'stock',
                    'page',
                    'description'
                ]
            ],
            'meta' => ['total_books']
        ]);

        $response -> assertJson([
            'meta' => ['total_books' => 3]
        ]);
    }
}
