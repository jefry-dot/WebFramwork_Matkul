<?php

use App\Http\Controllers\UTSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ReportController as AdminReportController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [UTSController::class, 'index'])->name('uts.index');
Route::get('/pemrograman-web', [UTSController::class, 'web'])->name('uts.web');
Route::get('/database', [UTSController::class, 'database'])->name('uts.database');

// User Dashboard Routes (protected)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/courses/{id}', [DashboardController::class, 'showCourse'])->name('dashboard.courses.show'); // PERBAIKAN: nama route
});

// Admin Routes (protected + admin)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('courses', AdminCourseController::class);
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/reports', [AdminReportController::class, 'index'])->name('reports.index');
});

require __DIR__.'/auth.php';