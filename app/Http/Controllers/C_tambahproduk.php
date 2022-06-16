<?php

namespace App\Http\Controllers;

use App\Models\M_Produk;
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
            'user_id' => ['required'],
            'nama_produk' => ['required'],
            'satuan' => ['required'],
            'tanggal' => ['required','date'],
            'jumlah_produk_masuk' => ['required'],
            'jumlah_produk_keluar' => ['required'],
            'jumlah_sisa_produk' => [''],
        ]);
        
        $validatedData["jumlah_sisa_produk"] = $validatedData["jumlah_produk_masuk"]-$validatedData["jumlah_produk_keluar"];
        M_Produk::create($validatedData);
        $request->session()->flash('successAddProduct','Data produk berhasil ditambahkan!');
        return redirect('/V_Produk');
    }
}
