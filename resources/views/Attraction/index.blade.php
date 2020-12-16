@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<<<<<<< HEAD
<div class="header-bottom">
        <h1>GAME ZONE</h1>
        <p>Le premier parc d’attraction <br>
        au monde entièrement dédié à <br>
        l’univers des jeux-vidéos.</p>
=======
<div class="container">
  @foreach ($attractions as $attraction)
    <div>
      <p>Nom: {{ $attraction->name }}</p>
      <p>Logo: <img src="{{ asset('storage/'.$attraction->logo_url.'') }}" style="max-width: 200px;"></p>
      <div style="background-image: url('storage/<?php $attraction->logo_url ?>')"></div>
        <p>Bg_image: <img src="{{ asset('storage/'.$attraction->bg_image_url.'') }}" style="max-width: 200px;"></p>
      <p>Description: {{ $attraction->description }}</p>
      <p>Informations importantes: {{ $attraction->important_informations }}</p>
      <p>Hauteur minimum: {{ $attraction->min_height }}cm</p>
      <p>Expérience gagnée: {{ $attraction->exp_given }}</p>
      @if (Auth::user()->admin === 1)
        <a href="{{ route('Attraction.edit', ['Attraction' => $attraction->id]) }}" class="btn btn-primary">
          <span class="fa fa-edit"> Modifier</span>
        </a>
        <form action="{{ route('Attraction.destroy', ['Attraction' => $attraction->id]) }}" method="POST" style="display: contents">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">
            <span class="fa fa-trash">Supprimer</span>
          </button>
        </form>
      @endif
    </div>
  @endforeach
  @if (Auth::user()->admin ===1)
    <a href="{{ route('Attraction.create') }}" class="btn btn-primary">
      <span class="fa fa-edit"> Ajouter une attraction</span>
    </a>
  @endif
>>>>>>> acd1a58f532b6d86f1b9691bf14784348e54786c
</div>
<div class="attractions">
    @foreach ($attractions as $attraction)
    <div class="attraction" style="background-image: url('storage/{{$attraction->bg_image_url }}')">
        <div>
          <!-- <p>Nom: {{ $attraction->name }}</p> -->
          <p class="logo-attraction"><img src="{{ asset('storage/'.$attraction->logo_url.'') }}" style="max-width: 300px;"></p>
          <p>Gain xp : {{ $attraction->exp_given }} xp/partie</p>
          <p>{{ $attraction->min_height }} cm/min</p>
          <p class="description">{{ $attraction->description }}</p>
          <p><a href="">JE VEUX ESSAYER</a></p>
          <!-- <p>{{ $attraction->important_informations }}</p> -->
          @if (Auth::user()->admin === 1)

          <a class="button-reservation" href="{{ route('Attraction.edit', ['Attraction' => $attraction->id]) }}" class="btn btn-primary">
            <span class="fa fa-edit"> Modifier</span>
          </a>
          <form action="{{ route('Attraction.destroy', ['Attraction' => $attraction->id]) }}" method="POST" style="display: contents">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">
              <span class="fa fa-trash">Supprimer</span>
            </button>
          </form>
        </div>
        @endif
      </div>
    @endforeach
    @guest
    @else
    @if (Auth::user()->admin ===1)
      <a href="{{ route('Attraction.create') }}" class="btn btn-primary">
        <span class="fa fa-edit"> Ajouter une attraction</span>
      </a>
    @endif
    @endguest
  
  @endsection






