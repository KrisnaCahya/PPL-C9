<?php

namespace App\Http\Controllers;

use App\Models\M_Jadwal;
use Illuminate\Http\Request;

class C_Jadwal extends Controller
{
    //
    public function jadwal(){
        $jadwal=M_Jadwal::all();
        return view('V_Jadwal',[
            "active" => "jadwal",
            "title" => "jadwal",
            "data" => $jadwal,
        ]);
    }

    public function hapus(Request $request, $id){
        // dd($id);
        $data = M_Jadwal::find($id);
        $data->delete();
        return redirect('/V_Jadwal');
        // return $request->id;
    }
}
