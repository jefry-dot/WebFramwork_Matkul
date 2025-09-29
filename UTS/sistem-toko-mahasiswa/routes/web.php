<?php

use App\Http\Controllers\UtsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/uts', [UtsController::class, 'index'])->name('uts.index');
Route::get('/uts/web', [UtsController::class, 'pemrogramanWeb'])->name('uts.web');
Route::get('/uts/database', [UtsController::class, 'database'])->name('uts.database');
