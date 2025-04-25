<?php

use App\Http\Controllers\EkskulController;
use Illuminate\Support\Facades\Route;

// Halaman utama tetap welcome
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Ganti ini agar tidak langsung return view, tapi pakai controller
Route::get('/ekskul', function () {
    return view('ekskul/index');
});

// Gunakan route resource agar semua fitur ekskul aktif
Route::resource('ekskul', EkskulController::class);