@extends('layouts.app')
@section('scripts')
    <link rel="icon" type="image/png"      href="{{ asset('mainlogin/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('mainlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mainlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mainlogin/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mainlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mainlogin/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mainlogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('mainlogin/css/main.css')}}">


	    <script src="{{ asset('mainlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('mainlogin/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{ asset('mainlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('mainlogin/vendor/select2/select2.min.js')}}"></script>
        <script src="{{ asset('mainlogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="{{ asset('mainlogin/js/main.js')}}"></script>
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<div class="limiter">
    <div class="container-login100">         
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="mainlogin/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title">
                    Մուտք
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Մուտք
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Մոռացել ե՞ք 
                    </span>
                    @if (Route::has('password.request'))
                        <a class="txt2"  href="{{ route('password.request') }}">
                             գաղտնաբառը
                        </a>
                    @endif
                 
                </div>

                <div class="text-center ">
                    <a class="txt2" href="/register">
                       Ստեղծել Հաշիվ
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
