@extends('layout')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">
                    <h2>Show Tabel Arsip</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tabelarsips.index') }}"> Back</a>
                </div>
            </div>
            <div class="ibox-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Kode Klasifikasi:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->kode_klasifikasi }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Jenis Arsip:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->jenis_arsip }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Kategori:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->kategori->nama }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Uraian Informasi:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->uraian_informasi }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Nama Ruang:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->nama_ruang }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Nomor Rak:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->nomor_rak }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Nomor Box:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->nomor_box }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Nomor Folder:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->nomor_folder }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Jumlah Berkas:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->jumlah_berkas }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Tanggal Upload:</strong></label>
                    <div class="col-sm-10">
                        {{ $tabel_arsip->tanggal }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>File:</strong></label>
                    <div class="col-sm-10">
                        <embed src="{{ asset('tabel_arsip/' . $tabel_arsip->file) }}" type="application/pdf" width="100%" height="600px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
