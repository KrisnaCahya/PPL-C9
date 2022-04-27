<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_ubahtransaksi extends Controller
{
    public function edit($id){
        $data = Transaksi::find($id);
        // dd($data);
        return view('formubahtransaksi', compact('data'));
    }
    
    public function update(Request $request, $id){
        // dd($request);
        $data = Transaksi::find($id);
        $validatedData = $request->validate([
            'tanggal' => ['required'],
            'nama_produk' => ['required',],
            'jumlah_produk' => ['required'],
            'harga_satuan' => ['required'],
            'total_harga' => ['required'],
        ]);
        $data->update($validatedData);
        $request->session()->flash('updateSuccess', 'Ubah data transaksi telah berhasil!');
        return redirect('/transaksi'); 
    }
}
