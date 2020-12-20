@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>
<body onload="init()">

<section class="header-bottom-map">
  <h1>GAME ZONE</h1>
  <p>SE RENDRE AU PARC</p>
</section>

  <div class="h2-routes">
    <h2>NOUS TROUVER</h2>
  </div>
  
  <div id="mapid"></div>

<section class="routes">
  <div>
    <h2>BLABLA CAR</h2>
  </div>

  <div class="blabla-car">
    <div class="button-blabla-car">
      <p>Côté passager</p>
      <p><a href="https://www.blablacar.fr/" title="link-blabla-car">Chercher trajet</a></p>
    </div>
    <div class="button-blabla-car">
      <p>Côté conducteur</p>
      <p><a href="https://www.blablacar.fr/login?redirect=%2Foffer-seats" title="site-blabla-car">Proposer trajet</a></p>
    </div>
  </div>
  <h2>Préparer sa visite</h2>
  <div class="preparation">
    <div>
      <p><a href="" title="">Tarifs</a></p>
    </div>
    <div>
      <p><a href="" tilte="">Horaires</a></p>
    </div>
  </div>
</section>

<script>
  function init() {
    const parcThabor = {
      lat: 48.114384,
      lng: -1.669494
    }

    const zoomLevel = 7;

    const map = L.map('mapid').setView([51.505, -0.09], 13);

    const mainLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiemFyYXRjaHkiLCJhIjoiY2tpeDZ4b242M29objJxbGJiNXNweDh2biJ9.y1Hh5jIGyY4mjfLAeVoHEw'
    });

    mainLayer.addTo(map);


  }
</script>
</body>
@endsection