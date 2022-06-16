<?php

use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_Jadwal;
use App\Http\Controllers\C_Produk;
use App\Http\Controllers\C_Profil;
use App\Http\Controllers\C_beranda;
use App\Http\Controllers\C_Register;
use App\Http\Controllers\C_dashboard;
use App\Http\Controllers\C_Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_UbahJadwal;
use App\Http\Controllers\C_UbahProduk;
use App\Http\Controllers\C_UbahProfil;
use App\Http\Controllers\C_TambahJadwal;
use App\Http\Controllers\C_TambahProduk;
use App\Http\Controllers\C_ProfilPegawai;
use App\Http\Controllers\C_ubahtransaksi;
use App\Http\Controllers\C_tambahtransaksi;
use App\Http\Controllers\C_Rekap;
use App\Http\Controllers\C_sidebar;


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


// Route::get('/profil', function () {
//     return view('profil');
// });

// Route::get('/profilPegawai', function () {
//     return view('profilPegawai');
// });

// Route::get('/formubahproduk', function () {
//     return view('formubahproduk');
// });

Route::get('/V_Profil', [C_Profil::class, 'Profil'])->middleware('auth');

// Route untuk menuju ke halaman dashboard
Route::get('/V_Dashboard', [C_dashboard::class, 'index'])->middleware('guest');

// Route untuk menuju ke halaman beranda mitra
Route::get('/V_BerandaMitra', [C_beranda::class, 'index'])->middleware('auth');
// Route untuk menuju ke halaman beranda pegawai
Route::get('/V_BerandaPegawai', [C_beranda::class, 'index'])->middleware('auth');

// Route untuk menuju ke halaman produk
Route::get('/V_Produk', [C_Produk::class, 'produk'])->middleware('auth');

// Route untuk menuju ke halaman tambah produk
Route::get('/V_FormTambahProduk', [C_TambahProduk::class, 'tambah'])->middleware('auth');
// Route untuk menambah data produk
Route::post('/V_FormTambahProduk', [C_TambahProduk::class, 'create'])->middleware('auth');

// Route untuk menampilkan form ubah data produk
Route::get('/formubahproduk/{id}', [C_UbahProduk::class, 'ubah'])->middleware('auth');
// Route untuk mengupdate data produk
Route::post('/produk/update/{id}', [C_UbahProduk::class, 'update'])->middleware('auth');
// Route untuk menghapus data produk
Route::get('/produk/delete/{id}', [C_produk::class, 'hapus'])->middleware('auth');
// Route untuk menghapus data pegawai
Route::get('/pegawai/delete/{id}', [C_ProfilPegawai::class, 'hapus'])->middleware('auth');

// Route untuk menuju ke halaman transaksi
Route::get('/V_Transaksi', [C_Transaksi::class, 'transaksi'])->middleware('auth');

// Route untuk menuju ke halaman transaksi
Route::get('/V_FormTambahTransaksi', [C_tambahtransaksi::class, 'tambah'])->middleware('auth');
// Route untuk menambah data transaksi
Route::post('/V_FormTambahTransaksi', [C_tambahtransaksi::class, 'create'])->middleware('auth');

// Route untuk menampilkan form ubah data transaksi
Route::get('/formubahtransaksi/{id}', [C_ubahtransaksi::class, 'ubah'])->middleware('auth');
// Route untuk mengupdate data transaksi
Route::post('/transaksi/update/{id}', [C_ubahtransaksi::class, 'update'])->middleware('auth');
// Route untuk menghapus data transaksi
Route::get('/transaksi/delete/{id}', [C_Transaksi::class, 'hapus'])->middleware('auth');

// Route untuk menuju ke halaman jadwal
Route::get('/V_Jadwal', [C_Jadwal::class, 'jadwal'])->middleware('auth');
// Route untuk menambah data jadwal
Route::get('/V_TambahJadwal', [C_TambahJadwal::class, 'tambah'])->middleware('auth');
// Route untuk menambah data jadwal
Route::post('/V_TambahJadwal', [C_TambahJadwal::class, 'create'])->middleware('auth');

// Route untuk menampilkan form ubah data jadwal
Route::get('/UbahJadwal/{id}', [C_UbahJadwal::class, 'edit'])->middleware('auth');
// Route untuk mengupdate data jadwal
Route::post('/jadwal/update/{id}', [C_UbahJadwal::class, 'update'])->middleware('auth');
// Route untuk menghapus data jadwal
Route::get('/jadwal/delete/{id}', [C_Jadwal::class, 'hapus'])->middleware('auth');

// Route untuk menuju ke form ubah profil
Route::get('/V_FormUbahProfil', [C_UbahProfil::class, 'UbahProfil'])->middleware('auth');
// Route untuk update data profil
Route::post('/profil/update', [C_UbahProfil::class, 'update'])->middleware('auth');


// Route menampilkan profil pegawai
Route::get('/V_ProfilPegawai', [C_ProfilPegawai::class, 'ProfilPegawai'])->middleware('auth');

// Route menampilkan rekap keuangan
Route::get('/V_Rekap/{tahun}/{bulan}', [C_Rekap::class, 'rekapkeuangan'])->middleware('auth');

// REGISTER
// Menampilkan halaman register
Route::get('/V_Register', [C_Register::class, 'Register'])->middleware('guest');
// Route untuk create akun baru
Route::post('/V_Register', [C_Register::class, 'Create'])->middleware('guest');

// LOGIN
// Menampilkan view form login
Route::get('/V_Login', [C_Login::class, 'login'])->name('login')->middleware('guest');
// Mengotentikasi data request dengan database untuk login
Route::post('/V_Login', [C_Login::class, 'authenticate'])->middleware('guest');
// Route untuk logout
Route::post('/logout', [C_Login::class, 'logout'])->middleware('auth');