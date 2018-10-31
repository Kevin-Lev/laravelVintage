<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vintage - Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>

  
  <body>


        @extends('layouts.app')

        @section('content')
            <div class="container-fluid">

                <div class="row" style="margin-top: 200px;">
                    <div class="col">
                        <img src="/images/bigvintage.png" class="img-responsive center-block">
                    </div>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                        {{-- E-mail --}}
                        <div class="form-group row justify-content-center" style="margin-top: 30px;">       
                            <label for="email" class="col-xm-2 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-2">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="form-group row justify-content-center" style="margin-top: 30px; margin-right: 10px;">
                            <label for="password" class="col-xm-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-2">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Sign in --}}
                        <div class="row justify-content-center">
                            <div class="col-md-1" style="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </div>

                        <div class="row justify-content-center"  style="margin-top: 30px;">
                            <div class="col-md-1">
                                {{-- <td><button type="button" class="btn btn-primary-outline btn-md">sign up</button> --}}
                                <a href= "/register" class="btn btn-primary-outline btn-md">Sign up</a>
                            </div>
                        </div>

                </form>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <span class="label label-primary-outline">2018 Vintage - All rights reserved.</span>
                    </div>
                </div>
            </div>
        @endsection



        {{-- @extends('layouts.app') --}}

        {{-- @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection --}}
  </body>
</html>