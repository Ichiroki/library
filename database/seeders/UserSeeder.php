<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => Str::uuid(),
            'first_name' => "Ichiroki",
            'last_name' => "Kagetsu",
            'email' => 'fahrezirizqiawan12649@gmail.com',
            'phone_number' => '089662690020',
            'password' => Hash::make('tordas123'),
            'date_of_birth' => Carbon::create('2002', '9', '16')
        ]);
    }
}
