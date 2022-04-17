<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/berandaMitra', function () {
    return view('berandaMitra');
});

Route::get('/berandaPegawai', function () {
    return view('berandaPegawai');
});

Route::get('/profilMitra', function () {
    return view('profilMitra');
});

Route::get('/ubahProfil', function () {
    return view('ubahProfil');});

// Route untuk update data profil
Route::put('/profilMitra/update', [ProfileController::class, 'update']);

// Route menampilkan profil pegawai
Route::get('/profilPegawai', [ProfileController::class, 'index']);

// Route untuk delete
Route::post('/profilPegawai/hapus', [ProfileController::class, 'hapus']);

// REGISTER
// Menampilkan halaman register
Route::get('/register', [RegisterController::class, 'index']);

// Route untuk create akun baru
Route::post('/register', [RegisterController::class, 'store']);

// LOGIN
// Menampilkan view form login
Route::get('/login', [LoginController::class, 'index']);

// Mengotentikasi data request dengan database untuk login
Route::post('/login', [LoginController::class, 'authenticate']);

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout']);
