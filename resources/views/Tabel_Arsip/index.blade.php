@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="page-heading">
                <h1 class="page-title">Arsip</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">arsip</li>
                </ol>
            </div>
            <div class="pull-right mb-4">
                @can('tabel-arsip-create')
                    <a class="btn btn-success" href="{{ route('tabelarsips.create') }}"> Create New Arsip</a>
                @endcan
            </div>
        </div>
    </div>


    <div class="ibox">
        <div class="ibox-body">
            <table id="table-tabel_arsip" class="table table-striped table-bordered table-hover" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Klasifikasi</th>
                        <th>Jenis Arsip</th>
                        <th>Uraian Informasi</th>
                        <th>Kategori</th>
                        <th>Ruangan</th>
                        <th>Lemari</th>
                        <th>Rak</th>
                        <th>Box</th>
                        <th>Folder</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode Klasifikasi</th>
                        <th>Jenis Arsip</th>
                        <th>Uraian Informasi</th>
                        <th>Kategori</th>
                        <th>Ruangan</th>
                        <th>Lemari</th>
                        <th>Rak</th>
                        <th>Box</th>
                        <th>Folder</th>
                        <th width="280px">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table-tabel_arsip').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('tabelarsips.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'kode_klasifikasi',
                        name: 'kode_klasifikasi'
                    },
                    {
                        data: 'jenis_arsip',
                        name: 'jenis_arsip'
                    },
                    {
                        data: 'uraian_informasi',
                        name: 'uraian_informasi'
                    },
                    {
                        data: 'kategori',
                        name: 'kategori'
                    },
                    {
                        data: 'ruangan',
                        name: 'ruangan'
                    },
                    {
                        data: 'lemari',
                        name: 'lemari'
                    },
                    {
                        data: 'rak',
                        name: 'rak'
                    },
                    {
                        data: 'box',
                        name: 'box'
                    },
                    {
                        data: 'folder',
                        name: 'folder'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endsection
