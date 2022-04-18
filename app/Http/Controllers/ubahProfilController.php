<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ubahProfilController extends Controller
{
    public function edit(){
        return view('/ubahProfil')->with('user', auth()->user());
    }

    public function update(Request $request){
        $user = auth()->user();
        $request->validate([
            'nama' => ['required','min:5'],
            'nohp' => ['required','min:5','max:15','unique:users'],
            'email' => ['required','email','unique:users'],
            'alamat' => ['required','min:5','max:200'],
        ]);
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,

        ]);

        $request->session()->flash('updateSuccess', 'Ubah data profil telah berhasil!');
        return redirect('/profilMitra');

    }
}
