<?php

namespace App\Http\Controllers;

use App\Models\M_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_UbahTransaksi extends Controller
{
    public function ubah($id){
        $data = M_Transaksi::find($id);
        // dd($data);
        return view('V_FormUbahTransaksi', compact('data'));
    }
    
    public function update(Request $request, $id){
        // dd($request);
        $data = M_Transaksi::find($id);
        $validatedData = $request->validate([
            'tanggal' => ['required'],
            'nama_produk' => ['required',],
            'jumlah_produk' => ['required'],
            'harga_satuan' => ['required'],
            'total_harga' => [''],
        ]);
        
        $validatedData["total_harga"] = $validatedData["jumlah_produk"]*$validatedData["harga_satuan"];
        $data->update($validatedData);
        $request->session()->flash('updateSuccess', 'Ubah data transaksi telah berhasil!');
        return redirect('/V_Transaksi'); 
    }
}
