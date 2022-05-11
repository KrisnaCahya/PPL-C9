<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_tambahtransaksi extends Controller
{
    public function tambah(){
        return view('formtambahtransaksi',[
            "active" => "formtambahtransaksi",
            "title" => "formtambahtransaksi"
        ]);
    }

    public function create(Request $request){
        // dd($request);
        $validatedData = $request -> validate([
            'tanggal' => ['required'],
            'nama_produk' => ['required',],
            'jumlah_produk' => ['required'],
            'harga_satuan' => ['required'],
            'total_harga' => [''],
        ]);
        
        $validatedData["total_harga"] = $validatedData["jumlah_produk"]*$validatedData["harga_satuan"];
        Transaksi::create($validatedData);
        $request->session()->flash('successAddTransaction','Data transaksi berhasil ditambahkan!');
        return redirect('/V_Transaksi');
    }
}
