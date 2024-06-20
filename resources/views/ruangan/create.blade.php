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
                            <h2><b>Add Ruangan</b></h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('ruangan.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <form action="{{ route('ruangan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Ruangan</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="ruang" class="form-control" placeholder="Ruangan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Deskripsi</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="desc" class="form-control" placeholder="Deskripsi">
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
