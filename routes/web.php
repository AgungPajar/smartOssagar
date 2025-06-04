<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ekskul (user biasa)
    Route::resource('ekskul', EkskulController::class);
});

require __DIR__.'/auth.php';

// Guest (login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/sesi/login', [SessionController::class, 'login']);
});
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');

// Admin routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Ekskul untuk admin
    Route::resource('ekskul', EkskulController::class);
});
