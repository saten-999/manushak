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

<div class="fh5co-loader"></div>
	
	<div id="page">
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Կրթության արմատները դառն են, բայց պտուղը քաղցր է</h1>
									{{-- <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
									<p><a class="btn btn-primary btn-lg" href="/course">Սկսիր սովորել հիմա </a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/1.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Կրթության մեծ նպատակը ոչ թե գիտելիքն է, այլ գործողությունը</h1>
									{{-- <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
									<p><a class="btn btn-primary btn-lg" href="/course">Սկսիր սովորել հիմա </a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/3a.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Մենք օգնում ենք ձեզ սովորել նոր բաներ</h1>
									{{-- <h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
									<p><a class="btn btn-primary btn-lg" href="/course">Սկսիր սովորել հիմա </a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course-categories" class="bg-light">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Ինտենսիվ դասընթացներ</h2>
					<p>Դարձե՛ք ամենապահանջված մասնագետը մեզ հետ</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-shop"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Business</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Health &amp; Psychology</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-banknote"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Accounting</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Science &amp; Technology</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
	
			</div>
		</div>
	</div>

	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-world"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Foreign Followers</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Students Enrolled</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-bulb"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Classes Complete</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-head"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Certified Teachers</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



    {{-- blog --}}
	<div id="fh5co-blog" class="bg-light">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Վերջին նորություններ</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a>
						<div class="blog-text">                
                            <img class="img-fluid" src="https://escs.am/timthumb.php?src=https://escs.am/files/images/2022-04-11/83ae50d766bc5592e8eb630ff63868df.JPG&w=348&h=200"></a>

							<h3><a href="#">Վահրամ Դումանյանն ընդունել է երկրագնդի ուժեղագույն ծրագրավորողին՝ Գենադի Կորոտկևիչին</a></h3>
							<p>Երևանի պետական համալսարանում ապրիլի 12-ին կմեկնարկի Ծրագրավորման միջազգային թիմային ICPC մրցույթի՝ Հյուսիսային Եվրասիայի տարածաշրջանային եզրափակիչ փուլը: Ծրագրավորման աշխարհի ամենահին, ամենամեծ և ամենահեղինակավոր…</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(images/project-2.jpg);">

                        </a>
						<div class="blog-text">
                            <img class="img-fluid" src="https://escs.am/timthumb.php?src=https://escs.am/files/images/2022-04-08/f26e5ee3dd56c09ae1b7f7db06c0c7ff.JPG&w=348&h=200">

							<h3><a href="#">Հայաստանի ազգային կինոկենտրոնը պետության աջակցությամբ վերակառուցվել և հիմնովին նորոգվել է</h3></a>
							<p>Երևանի կենտրոնում` Տերյան 3ա հասցեում, 1928-1929 թթ․կառուցված պատմական շենքում բացվել է «Հայաստանի ազգային կինոկենտրոնի» վերակառուցված և հիմնանորոգված գրասենյակը: 2006 թվականից վարձակալված… 
                            </p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a>
						<div class="blog-text">
                            <img class="img-fluid" src="https://escs.am/timthumb.php?src=https://escs.am/files/images/2022-04-08/ace9f893d72d4b8bc4617d8218ee0210.jpg&w=348&h=200">

							<h3>Գիտաժողով՝ նվիրված Հայաստանի և ՉԺՀ-ի միջև դիվանագիտական հարաբերությունների հաստատման 30-ամյակին</h3>
                            <p>ՀՀ կրթության, գիտության, մշակույթի և սպորտի նախարարի տեղակալ Արթուր Մարտիրոսյանն այսօր մասնակցել է «Հայաստան-Չինաստան» գիտաժողովին, որը նվիրված էր Հայաստանի Հանրապետության և Չինաստանի Ժողովրդական Հանրապետության...</p>						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>




	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

</div>
@endsection
