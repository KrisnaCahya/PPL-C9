<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class C_ProfilPegawai extends Controller
{
    // Method untuk mengambil data user
    public function ProfilPegawai(){
        $data = User::where('role', 'pegawai')->get();
        return view('/V_ProfilPegawai',['data'=>$data]);
    }


    //method untuk menghapus data profil
    public function hapus(Request $request, $id){
        // dd($id);
        $data = User::find($id);
        $data->delete();
        return redirect('/V_ProfilPegawai');
        // return $request->id;
    }
    //
}
