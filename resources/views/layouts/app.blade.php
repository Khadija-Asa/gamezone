<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gamezone</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/attractions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mention.css') }}" rel="stylesheet">
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
		<link href="{{ asset('css/header.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

						<div class="cart">
                <a href="{{ url('/') }}"><i class="fas fa-shopping-basket"></i></a>
							</div>

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
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">S'enregistrer</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="#">attractions</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">plan</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">se rendre au parc</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">tarifs et billetterie</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">horaires et calendrier</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">my game</a>
                                </li>
														<li class="nav-item">
                                <a class="nav-link" href="#">informations</a>
                                </li>
														
													<ul class="languages-icon">
																<li class="nav-item">
                                <a class="nav-link" href="#"><img src="../images/flags/french.png"></a>
                                </li>
														<li class="nav-item">
                                <a class="nav-link" href="#"><img src="../images/flags/english.png"></a>
                                </li>
														<li class="nav-item">
                                <a class="nav-link" href="#"><img src="../images/flags/spanish.png"></a>
                                </li>
													</ul>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nickname }}
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

				<div class="top-logo">
					<img src="../images/logo-gamezone.png">
				</div>

				<section class="top-image">

					<div class="header-image">
					</div>
					<h1>game zone</h1>
					<h2>Le premier parc d'attraction au monde entièrement dédié à l'univers des jeux-vidéos.
				
				<section>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
