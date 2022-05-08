<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class C_Profil extends Controller
{
    public function Profil(){
        $profil=Auth::user();
        return view('profil',[
            "active" => "profil",
            "title" => "profil",
            "data" => $profil,
        ]);
    }
}
