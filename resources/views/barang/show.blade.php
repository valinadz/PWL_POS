@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Kode Barang</th>
                <td>{{ $barang->barang_kode }}</td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td>{{ $barang->barang_nama }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $barang->kategori->kategori_nama ?? '-' }}</td>
            </tr>
            <tr>
                <th>Supplier</th>
                <td>{{ $barang->supplier->supplier_nama ?? '-' }}</td>
            </tr>
            <tr>
                <th>Harga Beli</th>
                <td>{{ number_format($barang->barang_harga_beli) }}</td>
            </tr>
            <tr>
                <th>Harga Jual</th>
                <td>{{ number_format($barang->barang_harga_jual) }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>{{ $barang->barang_stok }}</td>
            </tr>
        </table>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>
@endsection
