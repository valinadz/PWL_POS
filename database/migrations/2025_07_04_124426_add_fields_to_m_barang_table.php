<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('m_barang', function (Blueprint $table) {
        $table->integer('barang_harga_beli')->nullable()->after('barang_nama');
        $table->integer('barang_harga_jual')->after('barang_harga_beli');
        $table->integer('barang_stok')->default(0)->after('barang_harga_jual');
    });
}

public function down(): void
{
    Schema::table('m_barang', function (Blueprint $table) {
        $table->dropColumn(['barang_harga_beli', 'barang_harga_jual', 'barang_stok']);
    });
}

};
