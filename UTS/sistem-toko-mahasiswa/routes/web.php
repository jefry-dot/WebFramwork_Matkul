<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UTSController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [UTSController::class, 'index'])->name('uts.index');
Route::get('/pemrograman-web', [UTSController::class, 'web'])->name('uts.web');
Route::get('/database', [UTSController::class, 'database'])->name('uts.database');

// Auth Routes (from Breeze)
require __DIR__.'/auth.php';

// Protected Routes (harus login)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/courses/{id}', [DashboardController::class, 'showCourse'])->name('dashboard.courses.show');
    
    // Route untuk dashboard lainnya bisa ditambahkan di sini
});