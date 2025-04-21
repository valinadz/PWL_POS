<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_stok')->insert([
            ['barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 10],
            ['barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 20],
            ['barang_id' => 3, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 15],
            ['barang_id' => 4, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 30],
            ['barang_id' => 5, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 50],
            ['barang_id' => 6, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 40],
            ['barang_id' => 7, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 25],
            ['barang_id' => 8, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 15],
            ['barang_id' => 9, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 30],
            ['barang_id' => 10, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 20],
        ]);
    }
}
