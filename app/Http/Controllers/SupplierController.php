<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SupplierController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Supplier',
            'list'  => ['Home', 'Supplier']
        ];

        $page = (object) [
            'title' => 'Daftar Supplier Barang'
        ];

        $activeMenu = 'supplier';
        $supplier = SupplierModel::all();

        return view('supplier.index', compact('breadcrumb', 'page', 'supplier', 'activeMenu'));
    }

    public function list(Request $request)
    {
        $suppliers = SupplierModel::select('supplier_id', 'supplier_nama', 'supplier_telp', 'supplier_alamat');

        if ($request->supplier_id) {
            $suppliers->where('supplier_id', $request->supplier_id);
        }

        return DataTables::of($suppliers)
            ->addIndexColumn()
            ->addColumn('aksi', function ($item) {
                return '
                    <a href="' . route('supplier.edit', $item->supplier_id) . '" class="btn btn-warning btn-sm">Edit</a>
                    <form method="POST" action="' . route('supplier.destroy', $item->supplier_id) . '" class="d-inline" onsubmit="return confirm(\'Yakin hapus data?\')">
                        ' . csrf_field() . method_field('DELETE') . '
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Supplier',
            'list'  => ['Home', 'Supplier', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Form Tambah Supplier'
        ];

        $activeMenu = 'supplier';

        return view('supplier.create', compact('breadcrumb', 'page', 'activeMenu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_nama' => 'required|string|max:100',
            'supplier_telp' => 'required|string|max:15',
            'supplier_alamat' => 'required|string|max:255',
        ]);

        SupplierModel::create($request->all());

        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil disimpan');
    }

    public function edit($id)
    {
        $supplier = SupplierModel::findOrFail($id);

        $breadcrumb = (object) [
            'title' => 'Edit Supplier',
            'list'  => ['Home', 'Supplier', 'Edit']
        ];

        $page = (object) [
            'title' => 'Form Edit Supplier'
        ];

        $activeMenu = 'supplier';

        return view('supplier.edit', compact('breadcrumb', 'page', 'supplier', 'activeMenu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_nama' => 'required|string|max:100',
            'supplier_telp' => 'required|string|max:15',
            'supplier_alamat' => 'required|string|max:255',
        ]);

        $supplier = SupplierModel::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil diperbarui');
    }

    public function destroy($id)
    {
        $supplier = SupplierModel::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil dihapus');
    }

    public function show($id)
    {
        $supplier = SupplierModel::findOrFail($id);

        $breadcrumb = (object) [
            'title' => 'Detail Supplier',
            'list'  => ['Home', 'Supplier', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Supplier'
        ];

        $activeMenu = 'supplier';

        return view('supplier.show', compact('breadcrumb', 'page', 'supplier', 'activeMenu'));
    }
}
