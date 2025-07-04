@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('kategori.update', $kategori->kategori_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="kategori_kode">Kode Kategori</label>
                <input type="text" name="kategori_kode" class="form-control @error('kategori_kode') is-invalid @enderror" value="{{ old('kategori_kode', $kategori->kategori_kode) }}">
                @error('kategori_kode')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kategori_nama">Nama Kategori</label>
                <input type="text" name="kategori_nama" class="form-control @error('kategori_nama') is-invalid @enderror" value="{{ old('kategori_nama', $kategori->kategori_nama) }}">
                @error('kategori_nama')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
