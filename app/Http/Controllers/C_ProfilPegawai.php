<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class C_ProfilPegawai extends Controller
{
    // Method untuk mengambil data user
    public function index(){
        $data = User::where('role', 'pegawai')->get();
        return view('/profilPegawai',['data'=>$data]);
    }


    //method untuk menghapus data profil
    public function hapus(Request $request){
        User::destroy($request->id);
        return redirect('/profilPegawai');
        // return $request->id;
    }
    //
}
