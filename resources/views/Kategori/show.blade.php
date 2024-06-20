@extends('layout')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">
                        <h2>Show Category</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('kategori.index') }}"> Back</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Nama:</strong></label>
                        <div class="col-sm-10">
                            {{ $kategori_Arsip->nama }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Status:</strong></label>
                        <div class="col-sm-10">
                            {{ $kategori_Arsip->status }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
