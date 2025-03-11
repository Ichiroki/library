<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookLendsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_add_book_lend()
    {
        $this->seed();
        $this->assertDatabaseHas('books', ['author' => 'Al Khawarizmi']);
    }
}
