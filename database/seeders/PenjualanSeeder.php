<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            ['user_id' => 1, 'pembeli' => 'John Doe', 'penjualan_kode' => 'P001', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Jane Smith', 'penjualan_kode' => 'P002', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Sam Wilson', 'penjualan_kode' => 'P003', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Anna Brown', 'penjualan_kode' => 'P004', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Chris Johnson', 'penjualan_kode' => 'P005', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Maria Davis', 'penjualan_kode' => 'P006', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'James Lee', 'penjualan_kode' => 'P007', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Linda Clark', 'penjualan_kode' => 'P008', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'David Lewis', 'penjualan_kode' => 'P009', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Emily Walker', 'penjualan_kode' => 'P010', 'penjualan_tanggal' => Carbon::now()],
        ]);
    }
}
