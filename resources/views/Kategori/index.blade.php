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
                <h1 class="page-title">Katergori</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Katergori</li>
                </ol>
            </div>
            <div class="pull-right mb-4">
                @can('kategori-arsip-create')
                    <a class="btn btn-success" href="{{ route('kategori.create') }}"> Create New Kategori</a>
                @endcan
            </div>
        </div>
    </div>


    <div class="ibox">
        <div class="ibox-body">
            <table id="table-kategori" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table = $('#table-kategori').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kategori.index') }}",
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
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            return '<span class="badge badge-success">' + data + '</span>';
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
