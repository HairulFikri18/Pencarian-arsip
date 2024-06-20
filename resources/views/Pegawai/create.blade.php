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
            <div class="ibox">
                <div class="ibox-head">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2><b>Pegawai</b></h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <form action="{{ route('pegawais.store') }}" method="POST" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Nama:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Email:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>No HP:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="nohp" class="form-control" placeholder="No HP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Alamat:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>NIP:</strong></label>
                            <div class="col-sm-10">
                                <input type="number" name="nip" class="form-control" placeholder="NIP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>NIK:</strong></label>
                            <div class="col-sm-10">
                                <input type="number" name="nik" class="form-control" placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Foto:</strong></label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" placeholder="Foto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
