<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('welcome');
})->name('users');

// Route untuk settings
Route::get('/settings', function () {
    return view('welcome');
})->name('settings');

// Route untuk reports
Route::get('/reports', function () {
    return view('welcome');
})->name('reports');

// Route untuk analytics
Route::get('/analytics', function () {
    return view('welcome');
})->name('analytics');


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';