<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BarangController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Barang',
            'list'  => ['Home', 'Barang']
        ];

        $page = (object) [
            'title' => 'Daftar Barang'
        ];

        $activeMenu = 'barang';
        $kategori = KategoriModel::all();
        $supplier = SupplierModel::all();

        return view('barang.index', compact('breadcrumb', 'page', 'kategori', 'supplier', 'activeMenu'));
    }

    public function list(Request $request)
    {
        $barang = BarangModel::with('kategori', 'supplier')->select('*');

        if ($request->kategori_id) {
            $barang->where('kategori_id', $request->kategori_id);
        }

        if ($request->supplier_id) {
            $barang->where('supplier_id', $request->supplier_id);
        }

        return DataTables::of($barang)
            ->addIndexColumn()
            ->addColumn('kategori', fn($row) => $row->kategori->kategori_nama ?? '-')
            ->addColumn('supplier', fn($row) => $row->supplier->supplier_nama ?? '-')
            ->addColumn('aksi', function ($row) {
                return '
                    <a href="'.route('barang.edit', $row->barang_id).'" class="btn btn-warning btn-sm">Edit</a>
                    <form method="POST" action="'.route('barang.destroy', $row->barang_id).'" class="d-inline-block">
                        '.csrf_field().method_field('DELETE').'
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin hapus?\')">Hapus</button>
                    </form>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Barang',
            'list'  => ['Home', 'Barang', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Form Tambah Barang'
        ];

        $activeMenu = 'barang';
        $kategori = KategoriModel::all();
        $supplier = SupplierModel::all();

        return view('barang.create', compact('breadcrumb', 'page', 'activeMenu', 'kategori', 'supplier'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_kode' => 'required|string|max:10|unique:m_barang,barang_kode',
            'barang_nama' => 'required|string|max:100',
            'kategori_id' => 'required|integer',
            'supplier_id' => 'nullable|integer',
            'barang_harga_beli' => 'nullable|integer',
            'barang_harga_jual' => 'required|integer',
            'barang_stok' => 'nullable|integer'
        ]);

        BarangModel::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil disimpan');
    }

    public function edit($id)
    {
        $barang = BarangModel::findOrFail($id);

        $breadcrumb = (object) [
            'title' => 'Edit Barang',
            'list'  => ['Home', 'Barang', 'Edit']
        ];

        $page = (object) [
            'title' => 'Form Edit Barang'
        ];

        $activeMenu = 'barang';
        $kategori = KategoriModel::all();
        $supplier = SupplierModel::all();

        return view('barang.edit', compact('breadcrumb', 'page', 'activeMenu', 'kategori', 'supplier', 'barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'barang_kode' => 'required|string|max:10|unique:m_barang,barang_kode,'.$id.',barang_id',
            'barang_nama' => 'required|string|max:100',
            'kategori_id' => 'required|integer',
            'supplier_id' => 'nullable|integer',
            'barang_harga_beli' => 'nullable|integer',
            'barang_harga_jual' => 'required|integer',
            'barang_stok' => 'nullable|integer'
        ]);

        $barang = BarangModel::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $barang = BarangModel::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil dihapus');
    }

    public function show($id)
    {
        $barang = BarangModel::with('kategori', 'supplier')->findOrFail($id);

        $breadcrumb = (object) [
            'title' => 'Detail Barang',
            'list'  => ['Home', 'Barang', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Barang'
        ];

        $activeMenu = 'barang';

        return view('barang.show', compact('breadcrumb', 'page', 'activeMenu', 'barang'));
    }
}
