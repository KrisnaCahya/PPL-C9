<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_dashboard extends Controller
{
    public function index(){
        return view('dashboard',[
            "active" => "dashboard",
            "title" => "dashboard"
        ]);
    }
}
