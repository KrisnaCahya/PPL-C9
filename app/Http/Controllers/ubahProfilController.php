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
        // dd($request);
        $validatedData = $request->validate([
            'nama' => ['required','min:5'],
            'nohp' => ['required','min:5','max:15'],
            'email' => ['required','email'],
            'alamat' => ['required','min:5','max:200'],
        ]);
        
        User::where('id',$request->id) -> update($validatedData);
        $request->session()->flash('updateSuccess', 'Ubah data profil telah berhasil!');
        return redirect('/profilMitra');

    }
}
