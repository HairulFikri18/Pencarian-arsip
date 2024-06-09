@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tabel Arsip</h2>
            </div>
            <div class="pull-right">
                @can('tabel-arsip-create')
                    <a class="btn btn-success" href="{{ route('tabelarsips.create') }}"> Create New Kategori</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="table-tabel_arsip" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Nama Ruang</th>
                <th>Nomor Rak</th>
                <th>Nomor Box</th>
                <th>Jumlah Berkas</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <script type="text/javascript">
            $(function() {
                var table = $('#table-tabel_arsip').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('tabelarsips.index') }}",
                    columns: [
                        { 
                            data: 'DT_RowIndex', 
                            name: 'DT_RowIndex', 
                            orderable: false, 
                            searchable: false 
                        },

            
                        { 
                            data: 'kategori', 
                            name: 'kategori' 
                        },
                      
                        
                        { 
                            data: 'nama_ruang', 
                            name: 'nama_ruang' 
                        },
                        { 
                            data: 'nomor_rak', 
                            name: 'nomor_rak' 
                        },
                        { 
                            data: 'nomor_box', 
                            name: 'nomor_box' 
                        },
                       
                        { 
                            data: 'jumlah_berkas', 
                            name: 'jumlah_berkas' 
                        },
                       
                       
                        { 
                            data: 'action', 
                            name: 'action', 
                            orderable: false, searchable: false 
                        },
                    ]
                });
            });
        </script>
    </table>
@endsection
