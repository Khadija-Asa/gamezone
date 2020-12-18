@extends('layouts.app')

@section('title', 'Details Produits')

@section('content')
<section class="header-bottom">
        <h1>GAME ZONE</h1>
        <p>MON COMPTE</p>
</section>
<div class="container-account">
      <div class="group-account">
          <div class="accountleft">
          <ul class="list-group-account-left">
            <li class="list-group-item-left">
              <img src="{{ asset($user->avatar) }}" style="max-width: 200px;">
            </li>
            <li class="list-group-item-left">
              Expérience: {{ $user->exp }}
            </li>
            @if (Auth::user()->admin === 1)
              <li class="list-group-item-left">
                Administrateur: {{ $user->admin }}
              </li>
            @endif
              </ul>
          </div>
          <div class="accountright">
          <ul class="list-group-account-right">
            <li class="list-group-item-right">
              Pseudo: {{ $user->nickname }}
            </li>
            <li class="list-group-item-right">
              Email: {{ $user->email }}
            </li>
            <li class="list-group-item-right">
              Prénom: {{ $user->first_name }}
            </li>
            <li class="list-group-item-right">
              Nom: {{ $user->last_name }}
            </li>
            <li class="list-group-item-right">
              Ville: {{ $user->city }}
            </li>
        </ul>
        </div>
        </div>
        <div class="buttonaccount">
          <a href="{{ route('User.edit', ['User' => $user->id]) }}" class="btn btn-primary">
            <button class="editbuttonaccount"><span class="fa fa-edit"> Modifier</span>
            </button>
          </a>
          <form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST" style="display: contents">
            @csrf
            @method('DELETE')
            <button class="deletebuttonaccount" type="submit">
              <span class="fa fa-trash">Supprimer le compte</span>
            </button>
          </form>
        </div>
        @if (Auth::user()->admin === 1)
        <div class="adminBoard">
          <p class="adminSectionTitle">Administration du site</p>
          <a href="{{ route('Attraction.create') }}" class="btn btn-primary">
            <button class="editbuttonaccount adminButton"><span class="fa fa-edit"> Ajouter une attraction</span>
            </button>
          </a>
          <a href="{{ route('Schedule.index') }}" class="btn btn-primary">
            <button class="editbuttonaccount adminButton"><span class="fa fa-edit"> Modifier les horaires</span>
            </button>
          </a>
          <a href="{{ route('User.index') }}" class="btn btn-primary">
            <button class="editbuttonaccount adminButton"><span class="fa fa-edit"> Liste des utilisateurs</span>
            </button>
          </a>
        </div>
        @endif
</div>
@endsection