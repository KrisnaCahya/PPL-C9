<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_TambahProduk extends Controller
{
    public function tambah(){
        return view('V_FormTambahProduk',[
            "active" => "V_FormTambahProduk",
            "title" => "V_FormTambahProduk"
        ]);
    }

    public function create(Request $request){
        // dd($request);
        $validatedData = $request -> validate([
            'nama_produk' => ['required'],
            'satuan' => ['required','integer'],
            'tanggal' => ['required','date'],
            'jumlah_produk_masuk' => ['required','integer'],
            'jumlah_produk_keluar' => ['required','integer'],
            'jumlah_sisa_produk' => [''],
        ]);
        
        $validatedData["jumlah_sisa_produk"] = $validatedData["jumlah_produk_masuk"]-$validatedData["jumlah_produk_keluar"];
        Products::create($validatedData);
        $request->session()->flash('successAddProduct','Data produk berhasil ditambahkan!');
        return redirect('/produk');
    }
}
