<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_Produk extends Controller
{
    public function index(){
        $product = Products::all();
        return view('/produk')->with('product', $product);
        // $produk = Products::all();
        // return view('/produk',['produk',$produk]);
    }

    
}
