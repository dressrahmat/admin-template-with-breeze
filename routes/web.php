<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Users\UsersIndex;
use App\Livewire\Frontend\Home\HomeIndex;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Dashboard\DashboardIndex;

/*
    ==================================
    ||   Sensus Santri START  ||
    ==================================
*/

/*
    ==================================
    ||   Sensus Santri END  ||
    ==================================
*/


Route::get('/', HomeIndex::class);

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

    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
    Route::get('/users', UsersIndex::class)->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';