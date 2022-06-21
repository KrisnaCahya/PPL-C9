<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\M_Jadwal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_TambahJadwal extends Controller
{
    public function tambah(){
        $user = User::all();
        // dd($user);
        return view('V_TambahJadwal',[
            "active" => "V_TambahJadwal",
            "title" => "V_TambahJadwal",
            "data" => User::where('role','pegawai')->get(),
        ]);
    }

    public function create(Request $request){
        // $validatedData = $request -> validate([
        //     'user_id' => ['required'],
        //     'tugas' => ['required'],
        //     'tanggal' => ['required'],
        //     'jam_masuk' => ['required'],
        //     'jam_pulang' => ['required'],
        // ]);
        
        // $validatedData['nama'] = User::find($request->user_id)->nama;
        // dd($validatedData);
        $this->cekDataNull($request);
        M_Jadwal::create($this->cekDataNull($request));
        return redirect('/V_Jadwal');
    }

    public function cekDataNull(Request $request){
        $validatedData = $request -> validate([
            'user_id' => ['required'],
            'tugas' => ['required'],
            'tanggal' => ['required'],
            'jam_masuk' => ['required'],
            'jam_pulang' => ['required'],
        ]);
        
        $validatedData['nama'] = User::find($request->user_id)->nama;
    
        return $validatedData;
    }
}
