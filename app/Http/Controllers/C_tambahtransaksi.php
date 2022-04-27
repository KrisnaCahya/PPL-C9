<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_tambahtransaksi extends Controller
{
    public function index(){
        return view('formtambahtransaksi',[
            "active" => "formtambahtransaksi",
            "title" => "formtambahtransaksi"
        ]);
    }

    public function store(Request $request){
        // dd($request);
        $validatedData = $request -> validate([
            'tanggal' => ['required'],
            'nama_produk' => ['required',],
            'jumlah_produk' => ['required'],
            'harga_satuan' => ['required'],
            'total_harga' => ['required'],
        ]);
        
        Transaksi::create($validatedData);
        $request->session()->flash('successAddTransaction','Data transaksi berhasil ditambahkan!');
        return redirect('/transaksi');
    }
}
