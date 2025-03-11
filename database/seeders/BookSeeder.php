<?php

namespace Database\Seeders;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'id' => Str::uuid(),
            'title' => 'Berpikir dan Menjadi Kaya Pola Pikir Sukses di Internet Dengan Cepat',
            'author' => 'Al Khawarizmi',
            'publisher' => 'Play Buku',
            'date_publish' => Carbon::create('2022', '8', '21'),
            'categories_id' => 1,
            'stock' => 30,
            'page' => 34,
            'description' => "Raih Kesuksesan di Pemasaran Internet dengan berpikir dan menjadi kaya - pola pikir sukses di internet"
        ]);
    }
}
