@extends('layouts.app')

@section('title', 'Details Produits')

@section('content')
<div class="container">
  @if (Auth::user()->admin === 1 OR Auth::user()->id === $user->id) <!-- Si l'utilisateur est admin OU si l'id demandée est l'id de l'utilsiateur connecté -->
  <div class="row">
    <div class="col-8">
      <ul class="list-group">
        <li class="list-group-item active">
          Nom d'affichage: {{ $user->nickname }}
        </li>
        <li class="list-group-item active">
          Email: {{ $user->email }}
        </li>
        <li class="list-group-item active">
          Prénom: {{ $user->first_name }}
        </li>
        <li class="list-group-item active">
          Nom: {{ $user->last_name }}
        </li>
        <li class="list-group-item active">
          Ville: {{ $user->city }}
        </li>
        <li class="list-group-item active">
          Avatar: <img src="{{ asset($user->avatar) }}" style="max-width: 200px;">
        </li>
        <li class="list-group-item active">
          Expérience: {{ $user->exp }}
        </li>
        @if (Auth::user()->admin === 1)
          <li class="list-group-item active">
            Administrateur: {{ $user->admin }}
          </li>
        @endif
      </ul>
      <a href="{{ route('User.edit', ['User' => $user->id]) }}" class="btn btn-primary">
        <span class="fa fa-edit"> Modifier</span>
      </a>
      <form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST" style="display: contents">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">
          <span class="fa fa-trash">Supprimer le compte</span>
        </button>
      </form>
    </div>
  </div>
  @endif
</div>
@endsection