<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // Method untuk mengambil seluruh data user
    public function index(){
        $data = User::all();
        return view('profilPegawai',['data'=>$data]);
    }


    public function update(Request $request){
        $validatedData = $request->validate([
            'nama' => ['required','min:5'],
            'nohp' => ['required','min:5','max:15','unique:users'],
            'email' => ['required','email','unique:users'],
            'alamat' => ['required','min:5','max:200'],
        ]);

        auth()->user()->update([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return back()->with('successUpdate','Data profil Anda berhasil di update');
    }

    //method untuk menghapus data profil
    public function hapus(Request $request){
        User::destroy($request->id);
        return redirect('/profilPegawai');
        // return $request->id;
    }
    //
}
