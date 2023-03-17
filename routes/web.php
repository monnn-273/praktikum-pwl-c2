<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
Route::get('/detail_mahasiswa/daftar_kekayaan', [MahasiswaController::class, 'daftar_kekayaan'])->name('one');


// Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);

Route::view('/daftar_mahasiswa', 'daftar_mahasiswa');


