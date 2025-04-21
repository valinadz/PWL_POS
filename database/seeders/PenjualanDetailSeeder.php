<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan_detail')->insert([
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 6000000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 2500000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 200000, 'jumlah' => 2],
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 75000, 'jumlah' => 3],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 15000, 'jumlah' => 4],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 30000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 300000, 'jumlah' => 2],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 500000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 80000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 35000, 'jumlah' => 3],
            ['penjualan_id' => 4, 'barang_id' => 1, 'harga' => 6000000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 4, 'harga' => 75000, 'jumlah' => 2],
            // 20 more records to complete 30 details
        ]);
    }
}
