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
    public function delete(Request $request, $id){
        // dd($id);
        $data = User::find($id);
        $data->delete();
        return redirect('/profilPegawai');
        // return $request->id;
    }
    //
}
