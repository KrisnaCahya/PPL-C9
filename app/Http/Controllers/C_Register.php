<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_Register extends Controller
{
    
    public function Register() 
    {
        return view('V_Register',[
            'title' => 'Daftar',
            'active' => 'Daftar'
        ]);
    }

    // Membuat method store untuk proses pembuatan akun
    public function Create(Request $request) {
        // Validasi data dengan syarat tertentu
        $validatedData = $request -> validate([
            'username' => ['required','unique:users'],
            'nama' => ['required'],
            'nohp' => ['required','unique:users'],
            'email' => ['required','unique:users'],
            'alamat' => ['required'],
            'password' => ['required'],
        ]);

        // Mengecek apakah password sama dengan konfirmasi password
       
            // Mengenkripsi password
            $validatedData['password'] = bcrypt($validatedData['password']);
            // Menuliskan data yang telah divalidasi ke dalam database User
            User::create($validatedData);
            // Menampilkan pesan flash bahwa akun berhasil dibuat
            $request->session()->flash('success','Akun berhasil dibuat! Silahkan login');
            // Mengalihkan ke halaman login
            return redirect('/V_Login');
        
    }
}
