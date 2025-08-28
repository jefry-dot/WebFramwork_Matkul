<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;

Route::get('/', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('home');
});

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{id}', [BlogController::class, 'show']);

Route::middleware([
    'auth',
    ValidateSessionWithWorkOS::class,
])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
