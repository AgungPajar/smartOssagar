<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Halaman umum
Route::get('/', function () {
    return view('welcome');
});

// Dashboard user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// USER AUTH (handled by Breeze)
require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    // Profil & ekskul user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('ekskul', EkskulController::class);
});

// ================= ADMIN LOGIN =================
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [SessionController::class, 'index'])->name('admin.login');
    Route::post('/admin/login', [SessionController::class, 'login'])->name('admin.login.submit');
});

Route::get('/admin/logout', [SessionController::class, 'logout'])->name('admin.logout');

// ================= ADMIN AREA =================
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('ekskul', EkskulController::class);
});
