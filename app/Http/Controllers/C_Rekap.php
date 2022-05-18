<?php

namespace App\Http\Controllers;

use App\Models\M_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class C_Rekap extends Controller
{
    public function rekapkeuangan($tahun,$bulan){
        return view('V_Rekap',[
            "rekap" => M_Transaksi::all(),
            "data" => M_Transaksi::whereMonth('created_at',$bulan)->whereYear('created_at',$tahun)->get()
        ]);
        // $rekap = M_Transaksi::all();
        // $pemasukan = DB::table("m__transaksis")
	    //     ->select('tanggal', DB::raw('SUM(pemasukan) as totalPemasukan'))
        //     ->orderBy("tanggal")
        //     ->get();
        // $pengeluaran = DB::table("m__transaksis")
	    //     ->select('tanggal', DB::raw('SUM(pengeluaran) as totalPengeluaran'))
        //     ->orderBy("tanggal")
        //     ->get();
        // return view('/V_Rekap')->with('rekap', $rekap);
    }
}
