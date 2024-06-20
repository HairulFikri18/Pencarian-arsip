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
                        <h2><b>Create New Role</b></h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="ibox-body">
                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Name:</strong></label>
                    <div class="col-sm-10">
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Permission:</strong></label>
                    <div class="col-sm-10">
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->name, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                            <br/>
                        @endforeach
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
