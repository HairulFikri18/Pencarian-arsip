@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Pegawai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $pegawai->nama }}
            </div>

            <div class="form-group">
                <strong>Email:</strong>
                {{ $pegawai->email }}
            </div>
        
            <div class="form-group">
                <strong>No HP:</strong>
                {{ $pegawai->nohp }}
            </div>
        
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $pegawai->alamat }}
            </div>
        
            <div class="form-group">
                <strong>NIP:</strong>
                {{ $pegawai->nip }}
            </div>
        
            <div class="form-group">
                <strong>NIK:</strong>
                {{ $pegawai->nik }}
            </div>

            <div class="form-group">
                <strong>Foto:</strong>
                <img src="/pegawai/{{ $pegawai->foto }}" width="100px" alt="">
            </div>
        </div>
    </div>
@endsection
