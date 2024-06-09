@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kategori Arsip</h2>
            </div>
            <div class="pull-right">
                @can('kategori-arsip-create')
                    <a class="btn btn-success" href="{{ route('kategori.create') }}"> Create New Kategori</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="table-kategori" class=" table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <script type="text/javascript">
            $(function() {

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
                            render:function(data,type,row){
                                return '<span class="badge badge-success">' + data+ '</span>';

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

    </table>
@endsection
