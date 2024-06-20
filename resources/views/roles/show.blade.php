@extends('layout')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">
                    <h2>Show Role</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
            <div class="ibox-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Name:</strong></label>
                    <div class="col-sm-10">
                        {{ $role->name }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Permissions:</strong></label>
                    <div class="col-sm-10">
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <span class="badge badge-success">{{ $v->name }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
