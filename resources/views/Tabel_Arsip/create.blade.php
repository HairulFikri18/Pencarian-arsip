@extends('layout')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-12 margin-tb">

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

    <div class="ibox">
        <div class="ibox-head">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Buat Arsip</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tabelarsips.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="ibox-body">

            <form action="{{ route('tabelarsips.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Kode Klasifikasi:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_klasifikasi" class="form-control" placeholder="Kode Klasifikasi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Jenis Arsip:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" name="jenis_arsip" class="form-control" placeholder="Jenis Arsip">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Uraian Informasi:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" name="uraian_informasi" class="form-control" placeholder="Uraian Informasi">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Kategori:</strong></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_kategori" id="exampleFormControlSelect1">
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Ruangan</strong></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_ruangans" id="exampleFormControlSelect1">
                            @foreach ($ruangans as $ruangan)
                                <option value="{{ $ruangan->id }}">{{ $ruangan->ruang }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Lemari</strong></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_lemari" id="exampleFormControlSelect1">
                            @foreach ($lemaris as $lemari)
                                <option value="{{ $lemari->id }}">{{ $lemari->lemari }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Rak</strong></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_rak" id="exampleFormControlSelect1">
                            @foreach ($raks as $rak)
                                <option value="{{ $rak->id }}">{{ $rak->rak }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Box</strong></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_box" id="exampleFormControlSelect1">
                            @foreach ($boxs as $box)
                                <option value="{{ $box->id }}">{{ $box->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Folder</strong></label>
                    <div class="col-sm-10">
                        <input type="text" name="folder" class="form-control" placeholder="Folder">
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
@endsection
