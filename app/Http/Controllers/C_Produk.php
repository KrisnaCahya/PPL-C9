<?php

namespace App\Http\Controllers;

use App\Models\M_Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class C_Produk extends Controller
{
    public function produk(){
        // $produk = M_Produk::all();
        $produk = DB::table('m__produks')
        ->select('m__produks.*',"users.nama as nama_user")
        ->leftJoin('users','m__produks.user_id','=','users.id')
        ->get();
        return view('/V_Produk')->with('product', $produk);
        // $produk = M_Produk::all();
        // return view('/produk',['produk',$produk]);
    }

    public function hapus(Request $request, $id){
        // dd($id);
        $data = M_Produk::find($id);
        $data->delete();
        return redirect('/V_Produk');
        // return $request->id;
    }
    
}
