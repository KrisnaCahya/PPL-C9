<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_TambahJadwal extends Controller
{
    public function tambah(){
        return view('V_TambahJadwal',[
            "active" => "V_TambahJadwal",
            "title" => "V_TambahJadwal"
        ]);
    }

    public function create(Request $request){
        // dd($request);
        $validatedData = $request -> validate([
            'nama' => ['required'],
            'tugas' => ['required'],
            'tanggal' => ['required'],
            'jam_masuk' => ['required'],
            'jam_pulang' => ['required'],
        ]);
        
        M_Jadwal::create($validatedData);
        return redirect('/V_Jadwal');
    }
}
