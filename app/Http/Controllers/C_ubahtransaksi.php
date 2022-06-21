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
        // $validatedData = $request->validate([
        //     'tanggal' => ['required'],
        //     'nama_produk' => ['required',],
        //     'jumlah_produk' => ['required'],
        //     'pemasukan' => ['required'],
        //     'pengeluaran' => ['required'],
        // ]);
        
        $this->cekDataNull($request);
        $data->update($this->cekDataNull($request));
        $request->session()->flash('updateSuccess', 'Ubah data transaksi telah berhasil!');
        return redirect('/V_Transaksi'); 
    }

    public function cekDataNull(Request $request){
        $validatedData = $request->validate([
            'tanggal' => ['required'],
            'nama_produk' => ['required',],
            'jumlah_produk' => ['required'],
            'pemasukan' => ['required'],
            'pengeluaran' => ['required'],
        ]);

        return $validatedData;
    }
}
