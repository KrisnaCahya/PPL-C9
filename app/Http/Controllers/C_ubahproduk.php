<?php

namespace App\Http\Controllers;

use App\Models\M_Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_UbahProduk extends Controller
{
    public function ubah($id){
        $data = M_Produk::find($id);
        // dd($data);
        return view('V_FormUbahProduk', compact('data'));
    }
    
    public function update(Request $request, $id){
        // dd($request);
        $data = M_Produk::find($id);
        // $validatedData = $request->validate([
        //     'nama_produk' => ['required',],
        //     'satuan' => ['required'],
        //     'tanggal' => ['required'],
        //     'jumlah_produk_masuk' => ['required'],
        //     'jumlah_produk_keluar' => ['required'],
        //     'jumlah_sisa_produk' => [''],
        // ]);
        // $validatedData["jumlah_sisa_produk"] = $validatedData["jumlah_produk_masuk"]-$validatedData["jumlah_produk_keluar"];
        $this->cekDataNull($request);
        $data->update($this->cekDataNull($request));
        $request->session()->flash('updateSuccess', 'Ubah data produk telah berhasil!');
        return redirect('/V_Produk'); 
    }

    public function cekDataNull(Request $request){
        $validatedData = $request->validate([
            'nama_produk' => ['required',],
            'satuan' => ['required'],
            'tanggal' => ['required'],
            'jumlah_produk_masuk' => ['required'],
            'jumlah_produk_keluar' => ['required'],
            'jumlah_sisa_produk' => [''],
        ]);
        $validatedData["jumlah_sisa_produk"] = $validatedData["jumlah_produk_masuk"]-$validatedData["jumlah_produk_keluar"];

        return $validatedData;
    }
}