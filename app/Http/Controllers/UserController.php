<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Data yang akan diupdate
        $data = [
            'nama' => 'Pelanggan Pertama',  // Update kolom 'nama'
        ];

        // Update data user dengan 'username' = 'customer-1'
        UserModel::where('username', 'customer-1')->update($data);

        // Akses semua data dari tabel m_user
        $user = UserModel::all();  // Ambil semua data dari tabel m_user

        return view('user', ['data' => $user]);  // Kirim data ke view
    }
}
