<?php

namespace App\Http\Controllers;

use App\Models\M_Jadwal;
use Illuminate\Http\Request;

class C_UbahJadwal extends Controller
{
    public function edit($id){
        $data = M_Jadwal::find($id);
        return view('V_UbahJadwal', compact('data'));
    }

    public function update(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'nama' => ['required'],
            'tugas' => ['required'],
            'tanggal' => ['required'],
            'jam_masuk' => ['required'],
            'jam_pulang' => ['required'],
        ]);
        
        User::where('id',$request->id) -> update($validatedData);
        // $request->session()->flash('updateSuccess', 'Ubah data profil telah berhasil!');
        return redirect('/V_Jadwal');

    }
}
