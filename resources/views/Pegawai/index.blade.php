@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tabel pegawai</h2>
            </div>
            <div class="pull-right">
                @can('pegawai-create')
                    <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Create New Kategori</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="table-pegawai"  class=" table table-bordered">
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
        <script type="text/javascript">
            $(function() {

                var table = $('#table-pegawai').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('pegawais.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable:false,
                            searchable:false
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
                            render:function(data,type,row){
                                console.log(data);
                                return '<img src="/pegawai/' + data + '" alt="Image" width="100px">';
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
