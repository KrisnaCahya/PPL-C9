<?php

namespace App\Http\Controllers;

use App\Models\M_Produk;
use App\Models\M_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class C_tambahtransaksi extends Controller
{
    public function tambah(){
        return view('V_FormTambahTransaksi',[
            "active" => "V_FormTambahTransaksi",
            "title" => "V_FormTambahTransaksi",
            "data" => M_Produk::all(),
        ]);
    }

    public function create(Request $request){
        // dd($request);
        // $validatedData = $request -> validate([
        //     'user_id' => ['required'],
        //     'produk_id' => ['required'],
        //     'tanggal' => ['required'],
        //     'jumlah_produk' => ['required'],
        //     'pemasukan' => ['required'],
        //     'pengeluaran' => ['required'],
        // ]);

        // $validatedData['nama_produk'] = M_Produk::find($request->produk_id)->nama_produk;
        
        // $validatedData["total_harga"] = $validatedData["jumlah_produk"]*$validatedData["harga_satuan"];
        $this->cekDataNull($request);
        M_Transaksi::create($this->cekDataNull($request));
        $request->session()->flash('successAddTransaction','Data transaksi berhasil ditambahkan!');
        return redirect('/V_Transaksi');
    }

    public function cekDataNull(Request $request){
        $validatedData = $request -> validate([
            'user_id' => ['required'],
            'produk_id' => ['required'],
            'tanggal' => ['required'],
            'jumlah_produk' => ['required'],
            'pemasukan' => ['required'],
            'pengeluaran' => ['required'],
        ]);

        $validatedData['nama_produk'] = M_Produk::find($request->produk_id)->nama_produk;
    
        return $validatedData;
    }
}
