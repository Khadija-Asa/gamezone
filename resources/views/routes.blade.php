@extends('layouts.app')

@section('content')

<section class="header-bottom-map">
  <h1>GAME ZONE</h1>
  <p>SE RENDRE AU PARC</p>
</section>

<section class="routes">

  <div>
    <h2>NOUS TROUVER</h2>
  </div>

  <div class="map">
    <div class="pc">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6051.655708192405!2d3.505097840646467!3d50.377596180824085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edd9e9607687%3A0xfac745f81d635c4b!2sNouvelle%20Forge!5e0!3m2!1sfr!2sfr!4v1608461244618!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="mobile">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6051.655708192405!2d3.505097840646467!3d50.377596180824085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edd9e9607687%3A0xfac745f81d635c4b!2sNouvelle%20Forge!5e0!3m2!1sfr!2sfr!4v1608461244618!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>

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

@endsection