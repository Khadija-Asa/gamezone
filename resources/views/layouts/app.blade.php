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
<<<<<<< HEAD
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/attractions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mention.css') }}" rel="stylesheet">
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
=======
>>>>>>> 5df2d3433c1a4e4b0e680a8993a5098f4d896856
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
		<link href="{{ asset('css/header.css') }}" rel="stylesheet">

</head>

<body>

<!--mobile-->

		<header class="nav-bar">

				<section class="top-nav">	
					<div class="cart">
						<a href="{{ url('/') }}"><i class="fas fa-shopping-basket"></i></a>
					</div>
					<div class="user">
						<a href="{{ url('/User') }}"><i class="far fa-user"></i></a>
					</div>

			<button class="ham"></button>
				<nav class="navbar">

						<ul>
							<li class="nav-item">
            <a class="nav-link" href="#">le parc</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="#">les attractions</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="#">le plan</a>
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

							@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">Se connecter</a>
									</li>
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">S'enregistrer</a>
                    </li>
                @endif
              @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->nickname }}</a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                  </div>
                  </li>
              @endguest
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
					</ul>
				</nav>
				</section>
				
				<div class="top-logo">
					<a href="#"><img src="../images/logo-gamezone.png"></a>
				</div>
			<header>

<!--pc-->

		<section class="top-header">
			<div class="navig-bar">
	    	<ul class="languages-icon">
          <li class="nav-item">
            <a class="languages-link" href="#"><img src="../images/flags/french.png"></a>
          </li>
          <li class="nav-item">
            <a class="languages-link" href="#"><img src="../images/flags/english.png"></a>
          </li>
          <li class="nav-item">
            <a class="languages-link" href="#"><img src="../images/flags/spanish.png"></a>
          </li>
        </ul>
        <div class="account">
          <div class="avatar">
            <img src="{{ asset(Auth::user()->avatar) }}">
          </div>
          <div>
            Bienvenue, {{ Auth::user()->nickname }}<br>
            Expérience: {{ Auth::user()->exp }}<br>
            <a href="{{ route('User.edit', ['User' => Auth::user()->id]) }}">Mon compte</a>
          </div>
        </div>
      </div>
    </section>

		<nav class="navigation-bar">
			<div class="logo-icon">
					<a href="#"><img src="../images/logo-gamezone.png"></a>
      <ul class="menu">
          <li><a class="nav-menu" href="">le parc</a></li>
          <li><a class="nav-menu" href="">les attractions</a></li>
          <li><a class="nav-menu" href="">le plan</a></li>
          <li><a class="nav-menu" href="">se rendre au parc</a></li>
					<li><a class="nav-menu" href="">tarifs et billetterie</a></li>
					<li><a class="nav-menu" href="">horaire et calendrier</a></li>
					<li><a class="nav-menu" href="">my game</a></li>
					<li><a class="nav-menu" href="">informations</a></li>
        </ul>
				</div>
	</nav>

		<section class="header-bottom">

        <h1>GAME ZONE</h1>
        <p>Le premier parc d’attraction <br>
        au monde entièrement dédié à <br>
        l’univers des jeux-vidéos.</p>

    </section>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

			
		<script src="js/script.js"></script> 
	</body>
</html>
