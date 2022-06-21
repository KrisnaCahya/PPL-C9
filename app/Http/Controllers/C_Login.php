<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class C_Login extends Controller
{
    // Method untuk menampilkan halaman login
    public function login(){
        return view('V_Login',[
            "active" => "login",
            "title" => "login"
        ]);
    }

    // Method untuk proses otentikasi atau pengecekan data untuk login
    public function cekDataValid(Request $request){
        // Validasi pengisian form login
        $credentials = $request -> validate([
            // 'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Mengecek apakah username dan password sudah terdaftar/terotentikasi
        if(Auth::attempt($credentials)){
            // regenerate untuk menghindari session fixation (masuk ke dalam keamanan menggunakan session yang sama)
            $request -> session() -> regenerate();
            // Beralih ke halaman beranda
            if(Auth::user()->role == 'pegawai'){
                return redirect() -> intended('/V_BerandaPegawai');
            } else{
                return redirect() -> intended('/V_BerandaMitra');
            }
        }
        
        // Jika gagal, akan dikembalikan ke menu login dengan menampilkan pesan error
        return back()-> with('loginError', 'Data tidak valid!');
    }
    
    // Method untuk logout
    public function logout(Request $request)
    {
        
        Auth::logout();
        $request->session()->invalidate();
        // regenerate untuk menghindari session fixation (masuk ke dalam keamanan menggunakan session yang sama)
        $request->session()->regenerateToken();
        // beralih ke halaman login
        return redirect('/V_Login');
    }
    //
}
