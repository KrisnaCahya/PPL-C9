<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
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
            'username' => ['required','min:5','max:15','unique:users'],
            'nama' => ['required','min:5'],
            'nohp' => ['required','min:5','max:15','unique:users'],
            'email' => ['required','email','unique:users'],
            'alamat' => ['required','min:5','max:200'],
            'password' => ['required','min:5','max:100'],
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
        }
    }
}
