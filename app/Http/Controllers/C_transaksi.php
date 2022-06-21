<?php

namespace App\Http\Controllers;

use App\Models\M_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class C_Transaksi extends Controller
{
    public function transaksi(){
        // $transaksi = M_Transaksi::all();
        $transaksi = DB::table('m__transaksis')
        ->select('m__transaksis.*',"users.nama as nama_user")
        ->leftJoin('users','m__transaksis.user_id','=','users.id')
        ->get();
        // dd($transaksi);
        return view('/V_Transaksi')->with('transaksi', $transaksi);
        // $produk = Products::all();
        // return view('/produk',['produk',$produk]);
    }

    public function hapus(Request $request, $id){
        // dd($id);
        $data = M_Transaksi::find($id);
        $data->delete();
        return redirect('/V_Transaksi');
        // return $request->id;
    }
}
