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
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h2>Edit Category</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('kategori.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Nama:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control"
                                    placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Status:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="status" value="{{ $kategori->status }}" class="form-control"
                                    placeholder="Status">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
