<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_UbahProduk extends Controller
{
    public function ubah($id){
        $data = Products::find($id);
        // dd($data);
        return view('V_FormUbahProduk', compact('data'));
    }
    
    public function update(Request $request, $id){
        // dd($request);
        $data = Products::find($id);
        $validatedData = $request->validate([
            'nama_produk' => ['required',],
            'satuan' => ['required'],
            'tanggal' => ['required'],
            'jumlah_produk_masuk' => ['required'],
            'jumlah_produk_keluar' => ['required'],
            'jumlah_sisa_produk' => [''],
        ]);
        $validatedData["jumlah_sisa_produk"] = $validatedData["jumlah_produk_masuk"]-$validatedData["jumlah_produk_keluar"];
        $data->update($validatedData);
        $request->session()->flash('updateSuccess', 'Ubah data produk telah berhasil!');
        return redirect('/V_Produk'); 
    }
}