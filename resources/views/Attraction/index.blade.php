@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="header-bottom">
        <h1>GAME ZONE</h1>
        <p>Le premier parc d’attraction <br>
        au monde entièrement dédié à <br>
        l’univers des jeux-vidéos.</p>
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
          @guest
          @else
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
            @endif
          @endguest
        </div>
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






