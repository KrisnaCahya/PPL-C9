<?php

use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_Produk;
use App\Http\Controllers\C_Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_ubahproduk;
use App\Http\Controllers\C_UbahProfil;
use App\Http\Controllers\C_tambahproduk;
use App\Http\Controllers\C_ProfilPegawai;

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

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profilPegawai', function () {
    return view('profilPegawai');
});
Route::get('/tes', function () {
    return view('tes');
});
// Route::get('/formubahproduk', function () {
//     return view('formubahproduk');
// });


// Route untuk menuju ke halaman produk
Route::get('/produk', [C_Produk::class, 'index']);

// Route untuk menuju ke halaman produk
Route::get('/formtambahproduk', [C_tambahproduk::class, 'index'])->middleware('auth');
// Route untuk menambah data produk
Route::post('/formtambahproduk', [C_tambahproduk::class, 'store'])->middleware('auth');

// Route untuk menampilkan form ubah data produk
Route::get('/formubahproduk/{id}', [C_ubahproduk::class, 'edit']);
// Route untuk mengupdate data produk
Route::post('/produk/update/{id}', [C_ubahproduk::class, 'update']);
// Route untuk menghapus data produk
Route::get('/produk/delete/{id}', [C_produk::class, 'delete']);



// Route untuk menuju ke form ubah profil
Route::get('/ubahProfil', [C_UbahProfil::class, 'edit'])->middleware('auth');
// Route untuk update data profil
Route::post('/profil/update', [C_UbahProfil::class, 'update'])->middleware('auth');


// Route menampilkan profil pegawai
Route::get('/profilPegawai', [C_ProfilPegawai::class, 'index'])->middleware('auth');

// Route untuk delete
Route::post('/profilPegawai/hapus', [C_ProfilPegawai::class, 'hapus'])->middleware('auth');

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
Route::post('/logout', [C_Login::class, 'logout'])->middleware('auth');
