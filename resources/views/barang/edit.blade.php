@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('barang.update', $barang->barang_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="barang_kode" class="form-control" value="{{ old('barang_kode', $barang->barang_kode) }}">
            </div>

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="barang_nama" class="form-control" value="{{ old('barang_nama', $barang->barang_nama) }}">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori_id" class="form-control">
                    @foreach($kategori as $item)
                        <option value="{{ $item->kategori_id }}" {{ $barang->kategori_id == $item->kategori_id ? 'selected' : '' }}>{{ $item->kategori_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Supplier</label>
                <select name="supplier_id" class="form-control">
                    @foreach($supplier as $item)
                        <option value="{{ $item->supplier_id }}" {{ $barang->supplier_id == $item->supplier_id ? 'selected' : '' }}>{{ $item->supplier_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" name="barang_harga_beli" class="form-control" value="{{ old('barang_harga_beli', $barang->barang_harga_beli) }}">
            </div>

            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="barang_harga_jual" class="form-control" value="{{ old('barang_harga_jual', $barang->barang_harga_jual) }}">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="barang_stok" class="form-control" value="{{ old('barang_stok', $barang->barang_stok) }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
