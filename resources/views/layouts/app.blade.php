<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WannaTravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app" style="min-height: 94.4vh;">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'WannaTravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="#">Bengali Blog</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">English Blog</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Travel Videos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Travel Hacks</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">দেশ-ও-জনপদ</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Visa Info</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Contact Us</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Privacy Policy</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">About me</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Facebook Page</a>
                      </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></i></a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fab fa-instagram"></i></i></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fas fa-search"></i></i></i></a>
                      </li>
                        <!-- Authentication Links
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer  class="p-1 bg-dark text-white">
        <div class="container text-center">
          <small> © 2020 Copyright: Md. Rashaduzzaman</small>
        </div>
      </footer>
</body>
</html>
