@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')

<div class="attraction-page">

<div class="header-bottom">
        <h1>GAME ZONE</h1>
        <p>Les attractions</p>
</div>
<div class="attractions">
    @foreach ($attractions as $attraction)
    <div class="attraction" style="background-image: url('storage/{{$attraction->bg_image_url }}')">
        <div>
          <!-- <p>Nom: {{ $attraction->name }}</p> -->
          <p class="logo-attraction"><img src="{{ asset('storage/'.$attraction->logo_url.'') }}" style="max-width: 300px;" alt="logo"></p>
          <p>Gain xp : {{ $attraction->exp_given }} xp/partie</p>
          <p>{{ $attraction->min_height }} cm/min</p>
          <p class="description">{{ $attraction->description }}</p>
          <p><a href="{{ route('Calendar.index') }}">JE VEUX ESSAYER</a></p>
          <!-- <p>{{ $attraction->important_informations }}</p> -->
          @guest
          @else
            @if (Auth::user()->admin === 1)
              <a class="button-reservation" href="{{ route('Attraction.edit', ['Attraction' => $attraction->id]) }}" class="btn btn-primary">
                <span class="fa "> Modifier</span>
              </a>
            @endif
          @endguest
        </div>
      </div>
    @endforeach
</div>
</div>
  @endsection






