<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lend_books', function (Blueprint $table) {
            $table->id();
            $table->string('lend_number');
            $table->uuid('user_id');
            $table->string('book_id');
            $table->date('lend_date');
            $table->date('return_date');
            $table->enum('status', ['lended', 'returned', 'late']);
            $table->float('fine_cost');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lend_books');
    }
};
