<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class C_UbahProfil extends Controller
{
    public function UbahProfil(){
        return view('/V_FormUbahProfil')->with('user', auth()->user());
    }

    public function update(Request $request){
        // dd($request);
        // $validatedData = $request->validate([
        //     'nama' => ['required','min:5'],
        //     'nohp' => ['required','min:5','max:15'],
        //     'email' => ['required','email'],
        //     'alamat' => ['required','min:5','max:200'],
        // ]);
        $this->isDataNull($request);
        User::where('id',$request->id) -> update($this->isDataNull($request));
        $request->session()->flash('updateSuccess', 'Ubah data profil telah berhasil!');
        return redirect('/V_Profil');

    }

    public function isDataNull(Request $request){
        $validatedData = $request->validate([
            'nama' => ['required','min:5'],
            'nohp' => ['required','min:5','max:15'],
            'email' => ['required','email'],
            'alamat' => ['required','min:5','max:200'],
        ]);

        return $validatedData;
    }
}
