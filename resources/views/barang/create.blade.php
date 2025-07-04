@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="barang_kode" class="form-control @error('barang_kode') is-invalid @enderror" value="{{ old('barang_kode') }}">
                @error('barang_kode') <div class="text-danger"><small>{{ $message }}</small></div> @enderror
            </div>

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="barang_nama" class="form-control @error('barang_nama') is-invalid @enderror" value="{{ old('barang_nama') }}">
                @error('barang_nama') <div class="text-danger"><small>{{ $message }}</small></div> @enderror
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori_id" class="form-control">
                    @foreach($kategori as $item)
                        <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Supplier</label>
                <select name="supplier_id" class="form-control">
                    @foreach($supplier as $item)
                        <option value="{{ $item->supplier_id }}">{{ $item->supplier_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" name="barang_harga_beli" class="form-control" value="{{ old('barang_harga_beli') }}">
            </div>

            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="barang_harga_jual" class="form-control" value="{{ old('barang_harga_jual') }}">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="barang_stok" class="form-control" value="{{ old('barang_stok') }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
