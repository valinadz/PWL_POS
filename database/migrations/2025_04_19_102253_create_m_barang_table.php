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
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id')->unsigned(); // ID barang
            $table->unsignedBigInteger('kategori_id'); // Relasi ke tabel m_kategori
            $table->string('barang_kode', 10); // Kode barang
            $table->string('barang_nama', 100); // Nama barang
            $table->integer('harga_beli')->nullable(); // Harga beli barang
            $table->integer('harga_jual'); // Harga jual barang
            $table->timestamps(); // created_at, updated_at
        
            // Foreign Key
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori');
        });                
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
