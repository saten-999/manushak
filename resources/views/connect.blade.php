@extends('layouts.app')

@section('scripts')
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('mainnn/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('mainnn/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('mainnn/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('mainnn/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('mainnn/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('mainnn/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('mainnn/css/flexslider.css') }}">
<link rel="stylesheet" href="{{ asset('mainnn/css/style.css') }}">

    <script src="{{ asset('mainnn/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('mainnn/js/jquery.min.js') }}"></script>
	<script src="{{ asset('mainnn/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('mainnn/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('mainnn/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('mainnn/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('mainnn/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('mainnn/js/jquery.flexslider-min.js') }}"></script>
	<script src="{{ asset('mainnn/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('mainnn/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('mainnn/js/magnific-popup-options.js') }}"></script>
	<script src="{{ asset('mainnn/js/simplyCountdown.js') }}"></script>
	<script src="{{ asset('mainnn/js/main.js') }}"></script>
	{{-- <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script> --}}
    
@endsection

@section('content')
<div id="fh5co-contact" >
    <div class="container bg-light">
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box">   </div>
            <div class="col-md-6 animate-box">
                <h3 class="py-2">Կապվեք մեզ հետ</h3>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" class="form-control" placeholder="Անուն">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" id="lname" class="form-control" placeholder="Ազգանուն">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" class="form-control" placeholder="Էլ փոստ">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" id="subject" class="form-control" placeholder="Առաջարկվող թեմաներ">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Առաջարկ"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ուղարկել"  id="send" class="btn btn-primary">
                    </div>

                </form>		
            </div>
        </div>
        
    </div>
</div>

    
@endsection