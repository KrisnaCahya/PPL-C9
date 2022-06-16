<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Produk(){
        return $this->belongsTo(M_Produk::class);
    }
}
