<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cosnumero.com/">
    <meta property="og:site_name" content="Nature's Cosnumero - Lead Through Curiosity">
    <meta property="og:description" content="Market Place to buy sell and rent all second hand products and grow your business with free advertising." />
    <meta name="keywords" content="Buy ⇌ Sell ⇌ Rent,buy sell rent,secondhand,second hand,free ad,free advertisement,rent products,buy products,sell products" />


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Buy ⇌ Sell ⇌ Rent and Outsourcing Services place your ad and grow your business | All second hand products to buy sell and rent">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Lead Through Curiosity") }}</title>

    <!-- Scripts -->
   
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" > </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style="margin-left:30px;" class="navbar-brand" href="{{ url('/') }}">

                    <span style="font-family: 'Georgia', Gadget, serif;color:#80FE01;margin-top:0px;margin-left:53px;font-size:19px;"></span></br>

                    <img style="margin-top:-35px;margin-left:-21px;" src="{{ asset('img/lifecell.png') }}" width="100" height="50" />

                    <span style="color:#8AA1B8; margin-left:-5px;font-size:13px;font-family: 'Georgia', Gadget, serif;"></span>

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        {{-- <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('medical-ads') }}">{{ __('Medical-Ads') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Medical-Job-Portal') }}</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Medical-Blog-News') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Medical-IT-Outsourcing') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Medical R&D') }}</a>
                        </li> --}}
                        {{-- <li class="nav-item">

                            <a href="{{ url('consultancy') }}" ><img src="{{ asset('themes/img/consultancy.jpeg') }}"  title="Consultancy"  width="65" height="55" style="border-radius:50%;margin-top:-9px;" /></a>
                                        <!-- <a style="color:black;" class="nav-link" href="chat/">Chat</a> -->
                        </li> --}}

                        {{-- <li class="nav-item">

                            <a href="{{ url('finance') }}" ><img src="{{ asset('themes/img/finance.png') }}"  title="Finance"  width="50" height="45" style="border-radius:50%;margin-top:-4px;padding:2px;" /></a>
                                        <!-- <a style="color:black;" class="nav-link" href="chat/">Chat</a> -->
                        </li> --}}

                        {{-- <li class="nav-item">

                            <a href="{{ url('real-estate') }}" ><img src="{{ asset('themes/img/realestate.jpeg') }}"  title="Real Estate"   width="65" height="55" style="border-radius:50%;margin-top:-8px;" /></a>
                                        <!-- <a style="color:black;" class="nav-link" href="chat/">Chat</a> -->
                        </li> --}}

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item text-primary" href="{{ route('home') }}"> Profile </a>

                                    <a class="dropdown-item text-primary" href="{{ route('logout') }}"
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>
</html>