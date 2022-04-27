<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_transaksi extends Controller
{
    public function index(){
        $transaksi = Transaksi::all();
        return view('/transaksi')->with('transaksi', $transaksi);
        // $produk = Products::all();
        // return view('/produk',['produk',$produk]);
    }

    public function delete(Request $request, $id){
        // dd($id);
        $data = Transaksi::find($id);
        $data->delete();
        return redirect('/transaksi');
        // return $request->id;
    }
}
