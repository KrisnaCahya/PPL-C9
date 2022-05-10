<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class C_beranda extends Controller
{
    // Menampilkan beranda sesuai role
    public function index(){
        if (auth()->user()->role == 'pegawai'){
            return view('V_BerandaPegawai',[
                "active" => "login",
                "title" => "login"
            ]);
        } else{
            return view('V_BerandaMitra',[
                "active" => "login",
                "title" => "login"
            ]);
        }
    }
}
