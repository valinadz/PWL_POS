@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Nama Supplier</th>
                <td>{{ $supplier->supplier_nama }}</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>{{ $supplier->supplier_telp }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $supplier->supplier_alamat }}</td>
            </tr>
        </table>
        <a href="{{ route('supplier.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>
@endsection
