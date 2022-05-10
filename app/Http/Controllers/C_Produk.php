<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_Produk extends Controller
{
    public function produk(){
        $produk = Products::all();
        return view('/V_Produk')->with('product', $produk);
        // $produk = Products::all();
        // return view('/produk',['produk',$produk]);
    }

    public function hapus(Request $request, $id){
        // dd($id);
        $data = Products::find($id);
        $data->delete();
        return redirect('/produk');
        // return $request->id;
    }
    
}
