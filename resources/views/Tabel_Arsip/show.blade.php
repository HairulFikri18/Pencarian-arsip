@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Tabel Arsip</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tabelarsips.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Klasifikasi:</strong>
                {{ $tabel_arsip->kode_klasifikasi }}
            </div>

            <div class="form-group">
                <strong>Jenis Arsip:</strong>
                {{ $tabel_arsip->jenis_arsip }}
            </div>

            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $tabel_arsip->kategori->nama }}
            </div>
        
            <div class="form-group">
                <strong>Uraian Informasi:</strong>
                {{ $tabel_arsip->uraian_informasi }}
            </div>
        
            <div class="form-group">
                <strong>Nama Ruang:</strong>
                {{ $tabel_arsip->nama_ruang }}
            </div>
        
            <div class="form-group">
                <strong>Nomor Rak:</strong>
                {{ $tabel_arsip->nomor_rak }}
            </div>

            <div class="form-group">
                <strong>Nomor Box:</strong>
                {{ $tabel_arsip->nomor_box }}
            </div>
        
            <div class="form-group">
                <strong>Nomor Folder:</strong>
                {{ $tabel_arsip->nomor_folder }}
            </div>
            <div class="form-group">
                <strong>Jumlah Berkas:</strong>
                {{ $tabel_arsip->jumlah_berkas }}
            </div>
            <div class="form-group">
                <strong>Tanggal Upload:</strong>
                {{ $tabel_arsip->tanggal }}
            </div>

            <div class="form-group">
                <strong>File:</strong>
                <embed src="{{ asset('tabel_arsip/' . $tabel_arsip->file) }}" type="application/pdf" width="100%" height="600px" />
            </div>
        </div>
    </div>
@endsection
