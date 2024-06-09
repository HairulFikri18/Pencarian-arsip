@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Document</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tabelarsips.index') }}"> Back</a>
            </div>
        </div>
    </div>

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

    <form action="{{ route('tabelarsips.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Klasifikasi:</strong>
                    <input type="text" name="kode_klasifikasi" class="form-control" placeholder="kode klasifikasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Arsip:</strong>
                    <input type="text" name="jenis_arsip" class="form-control" placeholder="jenis arsip">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control" name="id_kategori" id="exampleFormControlSelect1">
                        @foreach($kategoris as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Uraian Informasi:</strong>
                    <input type="text" name="uraian_informasi" class="form-control" placeholder="uraian infromasi">
                </div>
            </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ruang:</strong>
                    <input type="text" name="nama_ruang" class="form-control" placeholder="nama ruang">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Rak:</strong>
                    <input type="text" name="nomor_rak" class="form-control"placeholder="nomor rak">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Box:</strong>
                    <input type="text" name="nomor_box" class="form-control"placeholder="nomor box">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Folder:</strong>
                    <input type="text" name="nomor_folder" class="form-control" placeholder="nomor folder">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Berkas:</strong>
                    <input type="text" name="jumlah_berkas" class="form-control" placeholder="jumlah berkas">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Upload:</strong>
                    <input type="date" name="tanggal" class="form-control" placeholder="tanggal">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>File:</strong>
                    <input type="file" class="form-control" name="file" placeholder="Detail">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
