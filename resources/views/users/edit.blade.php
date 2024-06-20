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

        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
        <div class="ibox">
            <div class="ibox-head">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit User</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="ibox-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Name</strong></label>
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Email</strong></label>
                    <div class="col-sm-10">
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Password</strong></label>
                    <div class="col-sm-10">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Confirm Password</strong></label>
                    <div class="col-sm-10">
                        {!! Form::password('confirm-password', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Role</strong></label>
                    <div class="col-sm-10">
                        {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
