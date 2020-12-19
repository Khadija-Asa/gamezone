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
              <img src="{{ asset($user->avatar) }}" style="max-width: 200px;" alt="avatar">
            </li>
            <li class="list-group-item-left">
              Expérience: {{ $user->exp }}
            </li>
              <li class="list-group-item-left">
                Administrateur: {{ $user->admin }}
              </li>
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
          <a href="{{ route('User.edit', ['User' => $user->id]) }}" class="btn btn-primary" title="modifier">
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
</div>
@endsection