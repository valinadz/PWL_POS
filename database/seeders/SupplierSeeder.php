<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = [
            ['supplier_kode' => 'SUP001', 'supplier_nama' => 'Supplier A', 'supplier_telp' => '081234567890', 'supplier_alamat' => 'Alamat Supplier A'],
            ['supplier_kode' => 'SUP002', 'supplier_nama' => 'Supplier B', 'supplier_telp' => '081234567891', 'supplier_alamat' => 'Alamat Supplier B'],
            ['supplier_kode' => 'SUP003', 'supplier_nama' => 'Supplier C', 'supplier_telp' => '081234567892', 'supplier_alamat' => 'Alamat Supplier C'],
        ];

        foreach ($suppliers as $supplier) {
            DB::table('m_supplier')->insert([
                'supplier_kode'   => $supplier['supplier_kode'],
                'supplier_nama'   => $supplier['supplier_nama'],
                'supplier_telp'   => $supplier['supplier_telp'],
                'supplier_alamat' => $supplier['supplier_alamat'],
                'created_at'      => Carbon::now(),
                'updated_at'      => Carbon::now(),
            ]);
        }
    }
}
