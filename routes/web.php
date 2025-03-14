<?php

use App\Http\Controllers\BookController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

Route::get('/', function () {

    $news = HTTP::get('https://api-berita-indonesia.vercel.app/tempo/bisnis');

    return Inertia::render('Welcome', [
        'news' => $news->object(),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->prefix('/data')->group(function() {
    Route::prefix('/books')->group(function() {
        Route::post('/create', [BookController::class, 'create']);
    });
});
