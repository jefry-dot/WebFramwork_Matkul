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

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route Contact
Route::get('/contact', function () {
    return "Ini halaman Contact";
})->name('contact');

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});


Route::prefix('manager')->group(function () {

    // Route untuk dashboard admin
    Route::get('/edit', function () {
        return 'halaman edit';
    });

    // Route untuk profil admin

});



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
