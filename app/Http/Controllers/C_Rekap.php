<?php

namespace App\Http\Controllers;

use DB;
use App\Models\M_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;

class C_Rekap extends Controller
{
    public function rekapkeuangan($tahun,$bulan){
        return view('V_Rekap',[
            "rekap" => M_Transaksi::all(),
            "data" => M_Transaksi::whereMonth('tanggal',$bulan)->whereYear('tanggal',$tahun)->distinct('tanggal')->get(),
            "week" => Carbon::parse("01 May 2018"),
            // "weekNumber" => "week"->weekNumberInMonth,
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
