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
<<<<<<< HEAD
    <link href="{{ asset('css/recruitment.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
=======
>>>>>>> removed flags
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
									<a class="nav-link" href="#"><img src="{{ asset('images/flags/french.png') }}"></a>
									</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><img src="{{ asset('images/flags/english.png') }}"></a>
									</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><img src="{{ asset('images/flags/spanish.png') }}"></a>
									</li>
							</ul>
					</ul>
				</nav>
				</section>
				
				<div class="top-logo">
					<a href="#"><img src="{{ asset('images/logo-gamezone.png') }}"></a>
				</div>
			<header>

<!--pc-->

		<section class="top-header">
			<div class="navig-bar">
	    	{{-- <ul class="languages-icon">
          <li class="nav-item">
            <a class="languages-link" href="#"><img src="{{ asset('images/flags/french.png') }}"></a>
          </li>
          <li class="nav-item">
            <a class="languages-link" href="#"><img src="{{ asset('images/flags/english.png') }}"></a>
          </li>
          <li class="nav-item">
            <a class="languages-link" href="#"><img src="{{ asset('images/flags/spanish.png') }}"></a>
          </li>
        </ul> --}}
        <div class="contactHeader">
          <span>Contactez nos experts: </span>
        </div>
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
        <a href="#"><img src="{{ asset('images/logo-gamezone.png') }}"></a>
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

        <main class="py-4">
            @yield('content')
        </main>

        <footer>

    <section class="bottom-page">

      <div class="social-media">
        <h3>suivez gamezone :</h3>
        <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
        <a href="www.youtube.com"><i class="fab fa-youtube"></i></a>
        <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
      </div>

      <div class="logo-image">
        <a href="#"><img src="{{ asset('images/logo-gamezone.png') }}" alt="logo"></a>
      </div>

      <div class="links">
          <a href="">nous contacter</a>
          <a href="">on recrute</a>
          <a href="">dans la presse</a>
          <a href="">à propos du parc</a>
      </div>

      <hr>

      <div class="opening">
        <p>
          Du lundi au jeudi : 9h - 19h <br>
          Du vendredi au samedi : 9h - 20h <br>
          Le dimanche : 9h - 18h
        </p>
      </div>

      <hr>

      <div class="laws">
        <a href="">conditions de vente</a>
        <a href="">cookies</a>
        <a href="">conditions légales</a>
      </div>

      <p class="copyright"><i class="far fa-copyright"></i>Copyright Gamezone</p>
    </section>


  </footer>
    </div>

			
		<script src="js/script.js"></script> 
	</body>
</html>
