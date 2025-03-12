<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
            'name' => 'Business & Economy',
            'slug' => 'business-and-economy'
        ]);

        Categories::create([
            'name' => 'Fiction & Fantasy',
            'slug' => 'fiction-and-fantasy'
        ]);

        Categories::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Categories::create([
            'name' => 'Psychology',
            'slug' => 'psychology'
        ]);

        Categories::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Categories::create([
            'name' => 'Motivation & Inspiration',
            'slug' => 'motivation-and-inspiration'
        ]);

        Categories::create([
            'name' => 'Mystery',
            'slug' => 'mystery'
        ]);

        Categories::create([
            'name' => 'general',
            'slug' => 'general'
        ]);

        Categories::create([
            'name' => 'Law & Firm',
            'slug' => 'law-and-firm'
        ]);
    }
}
