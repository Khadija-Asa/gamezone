@extends('layouts.app')

@section('content')

<section class="header-bottom-map">
  <h1>GAME ZONE</h1>
  <p>LA CARTE DU PARC</p>
</section>

<section class="mapContainer">
  <div class="checkboxes">
      <div>
        <h3>Services</h3>
      <div>
        <input type="checkbox" id="servicesCheckbox" checked> 
        <label for="servicesCheckbox"><img src="{{ asset('images/services.png') }}" alt="services"> Services</label>
      </div>
      <div>
        <input type="checkbox" id="restaurantsCheckbox" checked>
        <label for="restaurantsCheckbox"><img src="{{ asset('images/restaurant.png') }}" alt="restaurants"> Restaurants</label>
      </div>
      <div>
        <input type="checkbox" id="shopsCheckbox" checked>
        <label for="shopsCheckbox"><img src="{{ asset('images/shops.png') }}" alt="boutique"> Boutiques</label>
      </div>
      <div>
        <input type="checkbox" id="photosCheckbox" checked>
        <label for="photosCheckbox"><img src="{{ asset('images/photos_point.png') }}" alt="photos"> Points photos</label>
      </div>
    </div>
    <div class="">
      <h3>Attraction accessibles</h3>
      <input type="radio" id="tall0" name="tall" checked> <label for="tall0">Je mesure plus de 1m30</label><br>
      <input type="radio" id="tall1" name="tall"> <label for="tall1">Je mesure moins de 1m10</label><br>
      <input type="radio" id="tall2" name="tall"> <label for="tall2">Je mesure moins de 1m30</label>
    </div>
  </div>
  <div class="map">
      <img src="{{ asset('images/map.png') }}" class="globalMap" alt="carte">
      <img src="{{ asset('images/photos_point.png') }}" class="photo1" id="photos" alt="photo">
      <img src="{{ asset('images/photos_point.png') }}" class="photo2" id="photos" alt="photo">
      <img src="{{ asset('images/photos_point.png') }}" class="photo3" id="photos" alt="photo">
      <img src="{{ asset('images/photos_point.png') }}" class="photo4" id="photos" alt="photo">
      <img src="{{ asset('images/photos_point.png') }}" class="photo5" id="photos" alt="photo">
      
      <img src="{{ asset('images/restaurant.png') }}" class="restaurant1" id="restaurants" alt="restaurant">
      <img src="{{ asset('images/restaurant.png') }}" class="restaurant2" id="restaurants" alt="restaurant">
      <img src="{{ asset('images/restaurant.png') }}" class="restaurant3" id="restaurants" alt="restaurant">
      <img src="{{ asset('images/restaurant.png') }}" class="restaurant4" id="restaurants" alt="restaurant">
      <img src="{{ asset('images/restaurant.png') }}" class="restaurant5" id="restaurants" alt="restaurant">
      
      <img src="{{ asset('images/shops.png') }}" class="shop1" id="shops" alt="boutique">
      <img src="{{ asset('images/shops.png') }}" class="shop2" id="shops" alt="boutique">
      <img src="{{ asset('images/shops.png') }}" class="shop3" id="shops" alt="boutique">
      <img src="{{ asset('images/shops.png') }}" class="shop4" id="shops" alt="boutique">
      <img src="{{ asset('images/shops.png') }}" class="shop5" id="shops" alt="boutique">
      
      <img src="{{ asset('images/services.png') }}" class="service1" id="services" alt="service">
      <img src="{{ asset('images/services.png') }}" class="service2" id="services" alt="service">
      <img src="{{ asset('images/services.png') }}" class="service3" id="services" alt="service">
      <img src="{{ asset('images/services.png') }}" class="service4" id="services" alt="service">
      <img src="{{ asset('images/services.png') }}" class="service5" id="services" alt="service">
      
      <img src="{{ asset('images/awsomeheros.png') }}" class="awesomeHeroes" alt="Awesome Heroes">
      <img src="{{ asset('images/battle_kart.png') }}" class="battleKart" alt="Battle Kart">
      <img src="{{ asset('images/champions_league.png') }}" class="championsLeague" alt="Champions League">
      <img src="{{ asset('images/championsleaguesurvivor.png') }}" class="championsLeagueSurvivor" alt="Champions League Survivor">
      <img src="{{ asset('images/contagion_vr.png') }}" class="contagionVR" alt="Contagion VR">
      <img src="{{ asset('images/fighter.png') }}" class="fighter" alt="Fighter">
      <img src="{{ asset('images/gamecente.png') }}" class="gameCenter" alt="Game Center">
      <img src="{{ asset('images/heroesteam.png') }}" class="heroesTeam" alt="Heroes Team">
      <img src="{{ asset('images/super_fighter.png') }}" class="superFighter" alt="Super Fighter">
  </div>
</section>
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

@endsection
