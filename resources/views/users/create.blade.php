@extends('layout')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2><b>Add New User</b></h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="ibox-body">
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

                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Nama:</strong></label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Email:</strong></label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" placeholder="email@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Password:</strong></label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Confirm Password:</strong></label>
                        <div class="col-sm-10">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><strong>Role:</strong></label>
                        <div class="col-sm-10">
                            {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple' => 'multiple']) !!}
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
