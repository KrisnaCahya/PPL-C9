<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class C_beranda extends Controller
{
    public function index(){
        if (auth()->user()->role == 'pegawai'){
            return view('berandaPegawai',[
                "active" => "login",
                "title" => "login"
            ]);
        } else{
            return view('berandaMitra',[
                "active" => "login",
                "title" => "login"
            ]);
        }
    }
}
