<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gamezone est le premier parc d'attractions dédié à l'univers du jeu-vidéo. Vivez une immersion unique dans des jeux-vidéos grandeur nature, comme Fortnite Aventure, PUBG Survivor ou encore Battle Kart VR.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gamezone</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Styles -->
   
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/attractions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mention.css') }}" rel="stylesheet">
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
		<link href="{{ asset('css/header.css') }}" rel="stylesheet">
		<link href="{{ asset('css/recruitment.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pricelist.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/informations.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sale.css') }}" rel="stylesheet">
    <link href="{{ asset('css/legal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cookies.css') }}" rel="stylesheet">
    <link href="{{ asset('css/schedule.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orderrecap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/productindex.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="{{ asset('css/routes.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>

<body>

<!--mobile-->

		<header class="nav-bar">
      <section class="top-nav">	
        @guest
        <div></div>
        @else
					<div class="user">
						<a href="{{ route('User.show', ['User' => Auth::user()->id]) }}" title="Mon compte"><img src="{{ asset('images/login.png') }}"></a>
          </div>
          @if (!Auth::user()->getIdCart()->isEmpty()) <!-- On fait apparaite le panier que s'il contient qqch -->
            <div class="cart">
              <a href="{{ route('Cart.show', ['Cart' => Auth::user()->getIdCart()[0]['id']]) }}" title="Mon panier"><img src="{{ asset('images/cart.png') }}"></a>
            </div>
          @endif
        @endguest

			<button class="ham"></button>
				<nav class="navbar">

						<ul>
							<li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}" title="Le parc">Parc</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="{{ route('Attraction.index') }}" title="Les attractions">Attractions</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="{{ route('map') }}" title="Le plan du parc">Plan</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="{{ route('routes') }}" title="Se rendre au parc">Se rendre au parc</a>
            </li>
							<li class="nav-item">
            <a class="nav-link" href="{{ route('pricelist') }}" title="Tarifs">Tarifs et billetterie</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="{{ route('Calendar.index') }}" title="Le calendrier">Horaires et calendrier</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="{{ route('game') }}">Mini-jeu</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="{{ route('informations') }}" title="A propos du parc">Informations</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="{{ route('Product.index') }}" title="La boutique">Boutique</a>
            </li>

							@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}" title="Se connecter">Se connecter</a>
									</li>
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" title="S'inscrire">S'enregistrer</a>
                    </li>
                @endif
              @else
                  <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ route('User.show', ['User' => Auth::user()->id]) }}" title="Mon compte">
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
                <img src="{{ asset(Auth::user()->avatar) }}" alt="Avatar">
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
					<a href="{{ route('home') }}" title="Accueil"><img src="{{ asset('images/logo-gamezone.png') }}" alt="Logo Gamezone"></a>
				</div>
      </header>

<!--pc-->
    <header>
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
          <div class="account">
            <div>
              <a class="nav-link" href="{{ route('login') }}" title="Se connecter">Se connecter</a>
              @if (Route::has('register'))
                 / <a class="nav-link" href="{{ route('register') }}" title="S'enregistrer">S'enregistrer</a>
              @endif
            </div>
          </div>
        @else
          <div class="account">
            <div class="avatar">
              <img src="{{ asset(Auth::user()->avatar) }}" alt="avatar">
            </div>
            <div>
              {{ Auth::user()->nickname }}<br>
              {{ Auth::user()->exp }} xp<br>
              <a href="{{ route('User.show', ['User' => Auth::user()->id]) }}" title="Mon compte">Mon compte</a><br>
              @if (!Auth::user()->getIdCart()->isEmpty()) <!-- On fait apparaite le panier que s'il contient qqch -->
                <a href="{{ route('Cart.show', ['Cart' => Auth::user()->getIdCart()[0]['id']]) }}" title="Mon panier">Mon panier ({{ Auth::user()->numberItems() }})</a><br>
              @endif
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" title="Déconnexion">
              Déconnexion</a>
            </div>
          </div>
        @endguest
      </div>
    </section>

		<nav class="navigation-bar">
			<!-- <div class="logo-icon"> -->
        <!-- <a href="#"><img src="{{ asset('images/logo-gamezone.png') }}"></a> -->
        <ul>
          <li class="animate__animated animate__heartBeat animate__delay-4s"><a href="{{ route('home') }}" title="Accueil"><img src="{{ asset('images/logo-gamezone.png') }}" alt="Logo Gamezone"></a></li>
          <li><a class="nav-menu" href="{{ route('home') }}" title="Le parc">Parc</a></li>
          <li><a class="nav-menu" href="{{ route('Attraction.index') }}" title="Les attractions">Attractions</a></li>
          <li><a class="nav-menu" href="{{ route('map') }}" title="Le plan du parc">Plan</a></li>
          <li><a class="nav-menu" href="{{ route('routes') }}" title="Se rendre au parc">Se rendre au parc</a></li>
          <li><a class="nav-menu" href="{{ route('pricelist') }}" title="Tarifs">Tarifs et billetterie</a></li>
          <li><a class="nav-menu" href="{{ route('Calendar.index') }}" title="Calendrier">Horaires et calendrier</a></li>
          <li><a class="nav-menu" href="{{ route('game') }}" title="Mini-jeu">Mini-jeu</a></li>
          <li><a class="nav-menu" href="{{ route('informations') }}" title="A propos du parc">Informations</a></li>
          <li><a class="nav-menu" href="{{ route('Product.index') }}" title="La boutique">Boutique</a></li>
        </ul>
			<!-- </div> -->
	  </nav>
    </header>
        <main class="py-4">

          @if(session()->has('message'))
            <div class="messageInformation">
                {{ session()->get('message') }}
            </div>
          @endif
            @yield('content')
        </main>

        <footer>

    <section class="bottom-page">

      <div class="social-media">
        <h3>suivez gamezone</h3>
        <div class="social-media-img">
        <a href="www.twitter.com"><img src="{{ asset('images/twitter-brands.svg') }}"></a>
        <a href="www.youtube.com"><img src="{{ asset('images/youtube-brands.svg') }}"></a>
        <a href="www.instagram.com"><img src="{{ asset('images/instagram-brands.svg') }}"></a>
        <a href="www.facebook.com"><img src="{{ asset('images/facebook-brands.svg') }}"></a>
        </div>
      </div>

      <div class="logo-image">
        <a href="{{ route('home') }}" title="Accueil"><img src="{{ asset('images/logo-gamezone.png') }}" alt="logo"></a>
      </div>

      <div class="links">
          <a href="{{ route('contact') }}" title="Contact">nous contacter</a>
          <a href="{{ route('recruitment') }}" title="Recrutement">on recrute</a>
          <a href="{{ route('informations') }}" title="La presse">dans la presse</a>
          <a href="{{ route('informations') }}" title="A propos du parc">à propos du parc</a>
      </div>

      <hr>

      <div class="opening">
        <p>
          @foreach ($scheduleList as $scheduleDay)
              {{ $scheduleDay->day }} : {{ $scheduleDay->start_hour}} - {{ $scheduleDay->end_hour}}<br>
          @endforeach
        </p>
      </div>

      <hr>

      <div class="laws">
        <a href="{{ route('sale') }}" title="Conditions générales de vente">conditions de vente</a>
        <a href="{{ route('cookies') }}" title="A propos des cookies">cookies</a>
        <a href="{{ route('legal') }}" title="Mentions légales">mentions légales</a>
      </div>

      <p class="copyright">Copyright Gamezone</p>
    </section>


  </footer>
    </div>

			
		<script src="js/script.js"></script> 
	</body>
</html>
