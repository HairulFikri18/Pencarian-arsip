@extends('layout')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">
                        <h2>Show Pegawai</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Nama:</strong></label>
                        <div class="col-sm-10">
                            {{ $pegawai->nama }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Email:</strong></label>
                        <div class="col-sm-10">
                            {{ $pegawai->email }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>No HP:</strong></label>
                        <div class="col-sm-10">
                            {{ $pegawai->nohp }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Alamat:</strong></label>
                        <div class="col-sm-10">
                            {{ $pegawai->alamat }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>NIP:</strong></label>
                        <div class="col-sm-10">
                            {{ $pegawai->nip }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>NIK:</strong></label>
                        <div class="col-sm-10">
                            {{ $pegawai->nik }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Foto:</strong></label>
                        <div class="col-sm-10">
                            <img src="/pegawai/{{ $pegawai->foto }}" width="100px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
