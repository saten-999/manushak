<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ուսուցման Համակարգ</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md   shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}" style="    margin-left: 100px;">
                    <img src="/images/logo.png" alt="" style="width: 45px;">Teacher Helper
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="/main">Գլխավոր <span class="sr-only">(current)</span></a>
                          </li>
                          
                          {{-- <li class="nav-item">
                            <a class="nav-link" href="/videos">Վիդեոդասեր</a>
                          </li> --}}
                          

                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/subject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Առարկաներ
                            </a>

                            <div class="dropdown-menu dropdown-menu-right text-black" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/course">Ինֆորմատիկա</a>
                            <a class="dropdown-item" href="/course">Հանրահաշիվ</a>
                            <a class="dropdown-item" href="/course">Երկրաչափություն</a>
                            <a class="dropdown-item" href="/course">Հայոց պատմություն</a>
                            </div>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/course">Օգտակար գործիքներ</a>
                          </li>
                          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/subject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Դասագրքեր
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-black" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/sub">Ինֆորմատիկա</a>
                                <a class="dropdown-item" href="/sub">Հանրահաշիվ</a>
                                <a class="dropdown-item" href="/sub">Երկրաչափություն</a>
                                <a class="dropdown-item" href="/sub">Հայոց պատմություն</a>
                                </div>
                            </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/blog">Բլոգ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/connect">Հետադարձ կապ</a>
                          </li>
                          {{-- <li class="nav-item">
                            <a class="nav-link" href="/about">Մեր մասին</a>
                          </li> --}}
                          
                          @guest
                          @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-black" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="" >
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
									<h2>Օգտակար նյութեր</h2>
									{{-- <p>Դարձե՛ք ամենապահանջված մասնագետը մեզ հետ</p> --}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-6 text-center animate-box">
									<div class="services">
										<span class="icon">
											<i class="icon-shop"></i>
										</span>
										<div class="desc">
											<h3><a href="#">Դիզայն</a></h3>
											{{-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> --}}
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 text-center animate-box">
									<div class="services">
										<span class="icon">
											<i class="icon-heart4"></i>
										</span>
										<div class="desc">
											<h3>Տեղեկատու</h3>
											{{-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> --}}
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 text-center animate-box">
									<div class="services">
										<span class="icon">
											<i class="icon-banknote"></i>
										</span>
										<div class="desc">
											<h3>Համակարգչային օգնականներ</h3>
											{{-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> --}}
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 text-center animate-box">
									<div class="services">
										<span class="icon">
											<i class="icon-lab2"></i>
										</span>
										<div class="desc">
											<h3><a href="#">Օգնող գործիքներ</h3>
											{{-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> --}}
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
											<span class="fh5co-counter-label">Նյութեր</span>
										</div>
										<div class="col-md-3 col-sm-6 text-center animate-box">
											<span class="icon"><i class="icon-study"></i></span>
											<span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
											<span class="fh5co-counter-label">Դասեր</span>
										</div>
										<div class="col-md-3 col-sm-6 text-center animate-box">
											<span class="icon"><i class="icon-bulb"></i></span>
											<span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
											<span class="fh5co-counter-label">Գրքեր</span>
										</div>
										<div class="col-md-3 col-sm-6 text-center animate-box">
											<span class="icon"><i class="icon-head"></i></span>
											<span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
											<span class="fh5co-counter-label">Օգտվողներ</span>
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
						

						</div>
					</footer>
					</div>

					<div class="gototop js-top">
						<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
					</div>

				</div>
        </main>
    </div>

