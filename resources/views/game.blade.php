@extends('layouts.app')

@section('content')

    <div class="snake-game">

  <canvas id="snake" width="608px" height="608px">
  </canvas>

  <input class="play" type="button" value="Replay" onClick="window.location.reload();">

      </div>

    <script type="text/javascript" src="{{ asset('js/game.js') }}"></script>

@endsection