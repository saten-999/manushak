<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=anonymous>
  <title>Admin</title>

  
    <link rel="icon" type="image/png"      href="{{ asset('adminlogin/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlogin/css/main.css') }}">

    <script src="{{ asset(' adminlogin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset(' adminlogin/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset(' adminlogin/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset(' adminlogin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset(' adminlogin/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset(' adminlogin/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset(' adminlogin/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset(' adminlogin/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset(' adminlogin/js/main.js') }}"></script>

</head>
<body>


  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form"  id="sign_in_adm" method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
				<span class="login100-form-title p-b-37">
				Admin
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type=email name=email placeholder="Email Address" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
         <span class="focus-input100">{{ $errors->first('email') }}</span>
         @endif
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type=password name=password placeholder="Password" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type=submit>
						Մուտք գործել
					</button>
				</div>
				</div>

			</form>

			
		</div>
	</div>
	
</body>
</html>