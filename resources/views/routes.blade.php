@extends('layouts.app')

@section('content')

<section class="header-bottom-map">
  <h1>GAME ZONE</h1>
  <p>SE RENDRE AU PARC</p>
</section>

  <div class="h2-routes">
    <h2>NOUS TROUVER</h2>
  </div>
  
  <div id="map" class="map" style="height: 500px"></div>

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
      <p><a href="{{ route('pricelist') }}" title="Tarifs">Tarifs</a></p>
    </div>
    <div>
      <p><a href="{{ route('Calendar.index') }}" tilte="Calendrier">Horaires</a></p>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('js/routes.js') }}"></script>
</section>
@endsection