@extends('layout')

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="ibox bg-success color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">{{ $pegawai }}</h2>
                        <div class="m-b-5">PEGAWAI</div><i class="ti-user widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ibox bg-info color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">{{ $arsip }}</h2>
                        <div class="m-b-5">ARSIP</div><i class="ti-folder widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ibox bg-warning color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">{{ $pengguna }}</h2>
                        <div class="m-b-5">Pengguna</div><i class="ti-harddrives widget-stat-icon"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="ibox color-white widget-stat" style="border-radius:5px">
            <div class="ibox-body">
                <form class="navbar-search" action="javascript:;">
                    <div class="rel d-flex justify-content-between  align-items-center ">
                        <span class="search-icon"><i class="ti-search text-primary " style="font-size : 20px"></i></span>
                        <input class="form-control " style="border: none" placeholder="Search here...">
                    </div>
                </form>
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



    </div>
@endsection
