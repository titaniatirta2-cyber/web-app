<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Web;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

// Route Utama & Dashboard (Olshop)
Route::get('/', [DashboardController::class, 'home']);
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
Route::get('/about', [DashboardController::class, 'about']);

// Route untuk menampilkan daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Route untuk membuka Controller web fungsi biodata
Route::get('/biodata', [Web::class, 'biodata']);

// Route ke controller kalkulator 
Route::get('/kalkulator', [KalkulatorController::class, 'home']);

// Route untuk proses perhitungan kalkulator
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

// Route untuk menampilkan form kalkulator segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

// Route untuk memproses hasil perhitungan segitiga
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'hitungSegitiga']);