<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_Register extends Controller
{
    
    public function index() 
    {
        return view('register.index',[
            'title' => 'login',
            'active' => 'login'
        ]);
    }

    // Membuat method store untuk proses pembuatan akun
    public function store(Request $request) {
        // Validasi data dengan syarat tertentu
        $validatedData = $request -> validate([
            'username' => ['required','unique:users'],
            'nama' => ['required'],
            'nohp' => ['required','unique:users'],
            'email' => ['required','unique:users'],
            'alamat' => ['required'],
            'password' => ['required'],
        ]);
        $confirmPass = $request->validate(['repassword' => ['required','min:5','max:100']]);

        // Mengecek apakah password sama dengan konfirmasi password
        if ($validatedData['password'] == $confirmPass['repassword']){
            // Mengenkripsi password
            $validatedData['password'] = bcrypt($validatedData['password']);
            // Menuliskan data yang telah divalidasi ke dalam database User
            User::create($validatedData);
            // Menampilkan pesan flash bahwa akun berhasil dibuat
            $request->session()->flash('success','Akun berhasil dibuat! Silahkan login');
            // Mengalihkan ke halaman login
            return redirect('/login');
        }else{
            $request->session()->flash('failedConfirmPass','Konfirmasi password tidak sesuai, Harap periksa kembali!');
            return redirect('/register');
        }
    }
}
