<?php

namespace App\Http\Controllers;

use App\Models\M_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_tambahtransaksi extends Controller
{
    public function tambah(){
        return view('V_FormTambahTransaksi',[
            "active" => "V_FormTambahTransaksi",
            "title" => "V_FormTambahTransaksi"
        ]);
    }

    public function create(Request $request){
        // dd($request);
        $validatedData = $request -> validate([
            'tanggal' => ['required'],
            'nama_produk' => ['required',],
            'jumlah_produk' => ['required'],
            'pemasukan' => ['required'],
            'pengeluaran' => ['required'],
        ]);
        
        // $validatedData["total_harga"] = $validatedData["jumlah_produk"]*$validatedData["harga_satuan"];
        M_Transaksi::create($validatedData);
        $request->session()->flash('successAddTransaction','Data transaksi berhasil ditambahkan!');
        return redirect('/V_Transaksi');
    }
}
