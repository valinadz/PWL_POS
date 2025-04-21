<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode' => 'K001', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'K002', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'K003', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'K004', 'kategori_nama' => 'Peralatan Rumah'],
            ['kategori_kode' => 'K005', 'kategori_nama' => 'Buku'],
        ]);
    }
}
