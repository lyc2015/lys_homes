@extends('layouts.blank')

@section('styles')
<!-- <link href="{{ asset('frontend/css/materialize.min.css') }}" rel="stylesheet"> -->
<link href="{{ asset('frontend/css/styles2.css') }}" rel="stylesheet">
<!-- <script src="{{ asset('bootstrap-4.6.2-dist/js/bootstrap.min.js') }}"></script> -->
@endsection


@section('content')

<div id="contents" class="business">
    <div class="main">

        <div class="page_header">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">LOGIN</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row" style="margin-top:30px">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group" style="text-align: center;">
                    <p style="font-size:33px">LOGIN</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" required>
                    @if ($errors->has('email'))
                    <span class="helper-text" data-error="wrong" data-success="right">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    @if ($errors->has('password'))
                    <span class="helper-text" data-error="wrong" data-success="right">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" name="remember">Remember Me</label>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">

                <h4 class="center text-lighten-3 uppercase p-t-30" style="color: #FE6900">{{ __('Login') }}</h4>

                <div class="p-20">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <p>
                            <label>
                                <input type="checkbox" name="remember" class="filled-in"
                                    {{ old('remember') ? 'checked' : '' }} />
                                <span>{{ __('Remember Me') }}</span>
                            </label>
                        </p>

                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn"
                                    style="background-color: #FE6900">
                                    {{ __('Login') }}
                                </button>

                                <a class="text-lighten-3 p-l-15" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <br />
    <br />
    <br />
</div>
@endsection