<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id')->unsigned(); // ID detail penjualan
            $table->unsignedBigInteger('penjualan_id'); // Relasi ke tabel t_penjualan
            $table->unsignedBigInteger('barang_id'); // Relasi ke tabel m_barang
            $table->integer('harga'); // Harga barang
            $table->integer('jumlah'); // Jumlah barang
            $table->timestamps(); // created_at, updated_at
        
            // Foreign Keys
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan');
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
