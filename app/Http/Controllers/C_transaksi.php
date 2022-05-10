<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_Transaksi extends Controller
{
    public function transaksi(){
        $transaksi = Transaksi::all();
        return view('/V_Transaksi')->with('transaksi', $transaksi);
        // $produk = Products::all();
        // return view('/produk',['produk',$produk]);
    }

    public function hapus(Request $request, $id){
        // dd($id);
        $data = Transaksi::find($id);
        $data->delete();
        return redirect('/V_Transaksi');
        // return $request->id;
    }
}
