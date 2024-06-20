@extends('layout')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('pegawais.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h2>Edit Product</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Nama</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" value="{{ $pegawai->nama }}" class="form-control"
                                    placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Email</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="{{ $pegawai->email }}" class="form-control"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>No Hanphone</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="nohp" value="{{ $pegawai->nohp }}" class="form-control"
                                    placeholder="No HP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" value="{{ $pegawai->alamat }}" class="form-control"
                                    placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>NIP</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="nip" value="{{ $pegawai->nip }}" class="form-control"
                                    placeholder="NIP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>NIK</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" value="{{ $pegawai->nik }}" class="form-control"
                                    placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Foto</strong></label>
                            <div class="col-sm-10">
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    </form>
@endsection
