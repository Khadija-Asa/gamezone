@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="container">
  @foreach ($attractions as $attraction)
    <div>
      <p>Nom: {{ $attraction->name }}</p>
      <p>Logo: <img src="{{ asset('storage/'.$attraction->logo_url.'') }}" style="max-width: 200px;"></p>
        <p>Bg_image: <img src="{{ asset('storage/'.$attraction->bg_image_url.'') }}" style="max-width: 200px;"></p>
      <p>Description: {{ $attraction->description }}</p>
      <p>Informations importantes: {{ $attraction->important_informations }}</p>
      <p>Hauteur minimum: {{ $attraction->min_height }}cm</p>
      <p>Expérience gagnée: {{ $attraction->exp_given }}</p>
      @if (Auth::user()->admin === 1)
        <a href="{{ route('Attraction.edit', ['Attraction' => $attraction->id]) }}" class="btn btn-primary">
          <span class="fa fa-edit"> Modifier</span>
        </a>
      @endif
    </div>
  @endforeach
</div>
@endsection