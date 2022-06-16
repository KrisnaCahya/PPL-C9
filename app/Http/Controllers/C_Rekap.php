<?php

namespace App\Http\Controllers;


use App\Models\M_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class C_Rekap extends Controller
{
    public function rekapkeuangan($tahun,$bulan){
        return view('V_Rekap',[
            "rekap" => M_Transaksi::all(),
            "data" => M_Transaksi::whereMonth('tanggal',$bulan)->whereYear('tanggal',$tahun)->distinct('tanggal')->get(),
            "month" => M_Transaksi::select(DB::raw("Month(created_at) as month"))
                    -> whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('month'),
            "datas" => array(0,0,0,0,0,0,0,0,0,0),


           
        ]);

        
    }

}
