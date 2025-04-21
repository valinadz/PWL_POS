<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Smartphone', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['kategori_id' => 2, 'barang_kode' => 'B003', 'barang_nama' => 'Jaket', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['kategori_id' => 2, 'barang_kode' => 'B004', 'barang_nama' => 'Kaos', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['kategori_id' => 3, 'barang_kode' => 'B005', 'barang_nama' => 'Roti', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['kategori_id' => 3, 'barang_kode' => 'B006', 'barang_nama' => 'Kopi', 'harga_beli' => 20000, 'harga_jual' => 30000],
            ['kategori_id' => 4, 'barang_kode' => 'B007', 'barang_nama' => 'Blender', 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['kategori_id' => 4, 'barang_kode' => 'B008', 'barang_nama' => 'Kompor Gas', 'harga_beli' => 400000, 'harga_jual' => 500000],
            ['kategori_id' => 5, 'barang_kode' => 'B009', 'barang_nama' => 'Novel', 'harga_beli' => 50000, 'harga_jual' => 80000],
            ['kategori_id' => 5, 'barang_kode' => 'B010', 'barang_nama' => 'Komik', 'harga_beli' => 20000, 'harga_jual' => 35000],
        ]);
    }
}
