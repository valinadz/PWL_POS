@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('level') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="level_kode">Kode Level</label>
                <input type="text" name="level_kode" class="form-control @error('level_kode') is-invalid @enderror" value="{{ old('level_kode') }}">
                @error('level_kode')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group">
                <label for="level_nama">Nama Level</label>
                <input type="text" name="level_nama" class="form-control @error('level_nama') is-invalid @enderror" value="{{ old('level_nama') }}">
                @error('level_nama')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('level') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
