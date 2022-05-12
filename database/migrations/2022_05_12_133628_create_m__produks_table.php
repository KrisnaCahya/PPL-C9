<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m__produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->integer('satuan');
            $table->date('tanggal');
            $table->integer('jumlah_produk_masuk');
            $table->integer('jumlah_produk_keluar');
            $table->integer('jumlah_sisa_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m__produks');
    }
};
