@extends('layouts.app')

@section('content')

  <section class="container-game">

    <div  class="instructions">

      <p>
      Utilisez les flèches de votre clavier pour déplacer le snake. <br>
      Votre mission : manger le plus possible de <span class="clause">Brahim</span> !
      </p>
      <input class="play" type="button" value="Replay" onClick="window.location.reload();">

      </div>

    <div class="snake-game">
      <canvas id="snake" width="608px" height="608px">
        </canvas>
      </div>

  </section>
      
    <script type="text/javascript" src="{{ asset('js/game.js') }}"></script>

@endsection