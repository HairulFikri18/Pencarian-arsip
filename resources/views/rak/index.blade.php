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
                <h1 class="page-title">Rak</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Rak</li>
                </ol>
            </div>
            <div class="pull-right mb-4">
                @can('kategori-arsip-create')
                    <a class="btn btn-success" href="{{ route('rak.create') }}"> Create New Rak</a>
                @endcan
            </div>
        </div>
    </div>


    <div class="ibox">
        <div class="ibox-body">
            <table id="table-rak" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Rak</th>
                        <th>Deskripsi</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Rak</th>
                        <th>Deskripsi</th>
                        <th width="280px">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table = $('#table-rak').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('rak.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'rak',
                        name: 'rak'
                    },
                    {
                        data: 'desc',
                        name: 'desc',
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
