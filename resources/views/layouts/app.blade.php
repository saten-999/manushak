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
    <script src="{{ asset('/js/app.js') }}" defer></script>


    @yield('scripts')
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
                            <a class="dropdown-item" href="/subb">Ինֆորմատիկա</a>
                            <a class="dropdown-item" href="/subb">Հանրահաշիվ</a>
                            <a class="dropdown-item" href="/subb">Երկրաչափություն</a>
                            <a class="dropdown-item" href="/subb">Հայոց պատմություն</a>
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
            @yield('content')
        </main>
    </div>
</body>
</html>
