@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="supplier_nama">Nama Supplier</label>
                <input type="text" name="supplier_nama" class="form-control @error('supplier_nama') is-invalid @enderror" value="{{ old('supplier_nama') }}">
                @error('supplier_nama') <div class="text-danger"><small>{{ $message }}</small></div> @enderror
            </div>

            <div class="form-group">
                <label for="supplier_telp">No. Telepon</label>
                <input type="text" name="supplier_telp" class="form-control @error('supplier_telp') is-invalid @enderror" value="{{ old('supplier_telp') }}">
                @error('supplier_telp') <div class="text-danger"><small>{{ $message }}</small></div> @enderror
            </div>

            <div class="form-group">
                <label for="supplier_alamat">Alamat</label>
                <textarea name="supplier_alamat" class="form-control @error('supplier_alamat') is-invalid @enderror">{{ old('supplier_alamat') }}</textarea>
                @error('supplier_alamat') <div class="text-danger"><small>{{ $message }}</small></div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
