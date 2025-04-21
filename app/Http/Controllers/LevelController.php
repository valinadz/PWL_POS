<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // INSERT
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values (?, ?, ?)', ['cus', 'pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // UPDATE
        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // DELETE
        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        // SELECT dan kirim ke view
        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
}
