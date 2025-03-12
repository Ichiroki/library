<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomNum = rand(5, 15);

        return [
            'id' => Str::uuid(),
            'title' => fake()->words($randomNum, true),
            'author' => fake()->name(),
            'publisher' => fake()->userName(),
            'date_publish' => fake()->date('d-m-Y'),
            'categories_id' => fake()->numberBetween(1, 10),
            'stock' => fake()->numberBetween(0, 200),
            'page' => fake()->numberBetween(0, 250),
            'description' => fake()->paragraphs($randomNum, true)
        ];
    }
}
