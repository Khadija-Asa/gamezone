@extends('layouts.app')

@section('content')
<input type="checkbox" id="servicesCheckbox" checked> <label for="servicesCheckbox">Services</label>
<input type="checkbox" id="restaurantsCheckbox" checked> <label for="restaurantsCheckbox">Restaurants</label>
<input type="checkbox" id="shopsCheckbox" checked> <label for="shopsCheckbox">Boutiques</label>
<input type="checkbox" id="photosCheckbox" checked> <label for="photosCheckbox">Points photos</label>
<div class="map">
    <img src="{{ asset('images/map.png') }}" class="globalMap">
    <img src="{{ asset('images/photos_point.png') }}" class="photo1" id="photos">
    <img src="{{ asset('images/photos_point.png') }}" class="photo2" id="photos">
    <img src="{{ asset('images/photos_point.png') }}" class="photo3" id="photos">
    <img src="{{ asset('images/photos_point.png') }}" class="photo4" id="photos">
    <img src="{{ asset('images/photos_point.png') }}" class="photo5" id="photos">
    
    <img src="{{ asset('images/restaurant.png') }}" class="restaurant1" id="restaurants">
    <img src="{{ asset('images/restaurant.png') }}" class="restaurant2" id="restaurants">
    <img src="{{ asset('images/restaurant.png') }}" class="restaurant3" id="restaurants">
    <img src="{{ asset('images/restaurant.png') }}" class="restaurant4" id="restaurants">
    <img src="{{ asset('images/restaurant.png') }}" class="restaurant5" id="restaurants">
    
    <img src="{{ asset('images/shops.png') }}" class="shop1" id="shops">
    <img src="{{ asset('images/shops.png') }}" class="shop2" id="shops">
    <img src="{{ asset('images/shops.png') }}" class="shop3" id="shops">
    <img src="{{ asset('images/shops.png') }}" class="shop4" id="shops">
    <img src="{{ asset('images/shops.png') }}" class="shop5" id="shops">
    
    <img src="{{ asset('images/services.png') }}" class="service1" id="services">
    <img src="{{ asset('images/services.png') }}" class="service2" id="services">
    <img src="{{ asset('images/services.png') }}" class="service3" id="services">
    <img src="{{ asset('images/services.png') }}" class="service4" id="services">
    <img src="{{ asset('images/services.png') }}" class="service5" id="services">
    
    <img src="{{ asset('images/awsomeheros.png') }}" class="awesomeHeroes">
    <img src="{{ asset('images/battle_kart.png') }}" class="battleKart">
    <img src="{{ asset('images/champions_league.png') }}" class="championsLeague">
    <img src="{{ asset('images/championsleaguesurvivor.png') }}" class="championsLeagueSurvivor">
    <img src="{{ asset('images/contagion_vr.png') }}" class="contagionVR">
    <img src="{{ asset('images/fighter.png') }}" class="fighter">
    <img src="{{ asset('images/gamecente.png') }}" class="gameCenter">
    <img src="{{ asset('images/heroesteam.png') }}" class="heroesTeam">
    <img src="{{ asset('images/super_fighter.png') }}" class="superFighter">
</div>
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

@endsection
