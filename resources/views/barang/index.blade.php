@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ route('barang.create') }}">Tambah</a>
        </div>
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-bordered table-striped table-hover table-sm" id="table_barang">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Supplier</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>

    </div>
</div>
@endsection

@push('js')
<script>
$(document).ready(function() {
    var tableBarang = $('#table_barang').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('barang.list') }}",
            type: "POST",
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
        },
        columns: [
            { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
            { data: 'barang_kode' },
            { data: 'barang_nama' },
            { data: 'kategori' },
            { data: 'supplier' },
            { data: 'barang_harga_beli', render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ) },
            { data: 'barang_harga_jual', render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp ' ) },
            { data: 'barang_stok', className: 'text-center' },
            { data: 'aksi', orderable: false, searchable: false, className: 'text-center' }
        ]
    });
});
</script>

@endpush
