<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Login;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\C_Register;
use App\Http\Controllers\ubahProfilController;

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

Route::get('/profilPegawai', function () {
    return view('pprofilPegawai');
});
Route::get('/tes', function () {
    return view('tes');
});


// Route untuk menuju ke form ubah profil
Route::get('/ubahProfil', [ubahProfilController::class, 'edit']);
// Route untuk update data profil
Route::post('/profilMitra/update', [ubahProfilController::class, 'update']);


// Route menampilkan profil pegawai
Route::get('/profilPegawai', [ProfileController::class, 'index']);

// Route untuk delete
Route::post('/profilPegawai/hapus', [ProfileController::class, 'hapus']);

// REGISTER
// Menampilkan halaman register
Route::get('/register', [C_Register::class, 'index']);

// Route untuk create akun baru
Route::post('/register', [C_Register::class, 'store']);

// LOGIN
// Menampilkan view form login
Route::get('/login', [C_Login::class, 'index']);

// Mengotentikasi data request dengan database untuk login
Route::post('/login', [C_Login::class, 'authenticate']);

// Route untuk logout
Route::post('/logout', [C_Login::class, 'logout']);
