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
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
		<link href="{{ asset('css/header.css') }}" rel="stylesheet">

    <link href="{{ asset('css/recruitment.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sale.css') }}" rel="stylesheet">
    <link href="{{ asset('css/legal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cookies.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body>

<!--mobile-->

		<header class="nav-bar">

				<section class="top-nav">	
					<div class="user">
						<a href="{{ url('/User') }}"><i class="far fa-user"></i></a>
          </div>
          <!-- <div class="cart">
						<a href="{{ url('/') }}"><i class="fas fa-shopping-basket"></i></a>
					</div> -->

			<button class="ham"></button>
				<nav class="navbar">

						<ul>
							<li class="nav-item">
            <a class="nav-link" href="#">Parc</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="#">Attractions</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="#">Plan</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="#">Se rendre au parc</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="#">Tarifs et billetterie</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="#">Horaires et calendrier</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="#">My game</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="#">Informations</a>
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
                      Déconnexion</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                  </div>
                  </li>
                  <li class="avatar">
                <img src="{{ asset(Auth::user()->avatar) }}">
              </li>
              <li>
                {{ Auth::user()->exp }} xp
              </li>
              @endguest
							<ul class="languages-icon">
								<li class="nav-item">
									<!-- <a class="nav-link" href="#"><img src="{{ asset('images/flags/french.png') }}"></a> -->
									</li>
								<li class="nav-item">
									<!-- <a class="nav-link" href="#"><img src="{{ asset('images/flags/english.png') }}"></a> -->
									</li>
								<li class="nav-item">
									<!-- <a class="nav-link" href="#"><img src="{{ asset('images/flags/spanish.png') }}"></a> -->
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
          <p>Contactez nos experts : <span class="phone-experts">08 59 62 08 59</span> Service 0,15€/min + prix appel</p>
        </div>
        @guest
        @else
        <div class="account">
          <div class="avatar">
            <img src="{{ asset(Auth::user()->avatar) }}">
          </div>
          <div>
            {{ Auth::user()->nickname }}<br>
            {{ Auth::user()->exp }} xp<br>
            <a href="{{ route('User.edit', ['User' => Auth::user()->id]) }}">Mon compte</a>
          </div>
        </div>
        @endguest
      </div>
    </section>

		<nav class="navigation-bar">
			<div class="logo-icon">
        <!-- <a href="#"><img src="{{ asset('images/logo-gamezone.png') }}"></a> -->
        <ul>
          <li><a href="#"><img src="{{ asset('images/logo-gamezone.png') }}"></a></li>
          <li><a class="nav-menu" href="">Parc</a></li>
          <li><a class="nav-menu" href="">Attractions</a></li>
          <li><a class="nav-menu" href="">Plan</a></li>
          <li><a class="nav-menu" href="">Se rendre au parc</a></li>
          <li><a class="nav-menu" href="">Tarifs et billetterie</a></li>
          <li><a class="nav-menu" href="">Horaire et calendrier</a></li>
          <li><a class="nav-menu" href="">My game</a></li>
          <li><a class="nav-menu" href="">Informations</a></li>
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
