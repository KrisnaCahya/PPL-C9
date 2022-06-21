<?php

namespace App\Http\Controllers;

use App\Models\M_Jadwal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_UbahJadwal extends Controller
{
    public function edit($id){
        $data = M_Jadwal::find($id);
        return view('V_UbahJadwal', compact('data'));
    }

    public function update(Request $request, $id){
        // dd($request);
        $data = M_Jadwal::find($id);
        // $validatedData = $request->validate([
        //     'nama' => ['required'],
        //     'tugas' => ['required'],
        //     'tanggal' => ['required'],
        //     'jam_masuk' => ['required'],
        //     'jam_pulang' => ['required'],
        // ]);
        $this->cekDataNull($request);
        $data->update($this->cekDataNull($request));
        // $request->session()->flash('updateSuccess', 'Ubah data produk telah berhasil!');
        return redirect('/V_Jadwal'); 

    }

    public function cekDataNull(Request $request){
        $validatedData = $request->validate([
            'nama' => ['required'],
            'tugas' => ['required'],
            'tanggal' => ['required'],
            'jam_masuk' => ['required'],
            'jam_pulang' => ['required'],
        ]);

        return $validatedData;
    }
}
