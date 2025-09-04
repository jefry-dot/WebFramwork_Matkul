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
    return "Ini halaman About";
})->name('about');


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

    
    Route::get('/edit', function () {
        return 'halaman edit';
    });

    

});

use App\Http\Controllers\PageController;


Route::get('/greeting', [PageController::class, 'greeting']);


Route::get('/user/{id}', [PageController::class, 'user']);


Route::get('/profile/{name?}', [PageController::class, 'profile']);


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/posts', [PageController::class, 'posts']);




require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
