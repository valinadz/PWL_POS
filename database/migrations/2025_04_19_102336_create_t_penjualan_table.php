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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id')->unsigned(); // ID penjualan
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel m_user
            $table->string('pembeli', 50); // Nama pembeli
            $table->string('penjualan_kode', 20); // Kode penjualan
            $table->dateTime('penjualan_tanggal'); // Tanggal penjualan
            $table->timestamps(); // created_at, updated_at
        
            // Foreign Key
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
