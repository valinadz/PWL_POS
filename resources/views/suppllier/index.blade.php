@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ route('supplier.create') }}">Tambah</a>
        </div>
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped table-hover table-sm" id="table_supplier">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
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
    $('#table_supplier').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('supplier.list') }}",
            type: 'POST',
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
        },
        columns: [
            { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
            { data: 'supplier_nama' },
            { data: 'supplier_telp' },
            { data: 'supplier_alamat' },
            { data: 'aksi', orderable: false, searchable: false }
        ]
    });
});
</script>
@endpush
