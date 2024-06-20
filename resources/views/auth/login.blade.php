@extends('auth.layout')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center" ><h1>Login</h1></div>
                        <div class="card-body">
                            <form id="login-form" action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <div class="input-group-icon right">
                                        <div class="input-icon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" id="email" class="form-control" name="email" required autofocus placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password</label>
                                    <div class="input-group-icon right">
                                        <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                        <input type="password" id="password" class="form-control" name="password" required placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <a href="{{route('register')}}">Register</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

