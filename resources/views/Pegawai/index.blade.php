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
                <h1 class="page-title">Pegawai</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Pegawai</li>
                </ol>
            </div>
            <div class="pull-right mb-4">
                @can('pegawai-create')
                    <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Create New Pegawai</a>
                @endcan
            </div>
        </div>
    </div>


    <div class="ibox">
        <div class="ibox-body">
            <table id="table-pegawai" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>NIP</th>
                        <th>NIK</th>
                        <th>Foto</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>NIP</th>
                        <th>NIK</th>
                        <th>Foto</th>
                        <th width="280px">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table-pegawai').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('pegawais.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'nohp',
                        name: 'nohp'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'nip',
                        name: 'nip'
                    },
                    {
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'foto',
                        name: 'foto',
                        render: function(data, type, row) {
                            return '<img src="/pegawai/' + data + '" alt="Image" width="50px">';
                        }
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
