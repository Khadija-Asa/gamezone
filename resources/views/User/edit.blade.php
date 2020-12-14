@extends('layouts.app')

@section('content')
<div class="container">
  @guest
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    @if (Auth::user()->admin === 1 OR Auth::user()->id === $user->id)
    <div class="row">
      <div class="col-8">
        <form action="{{ route('User.update', ['User'=>$user->id]) }}" method="POST" >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nickname">Nom d'affichage</label>
            <input value=" {{ $user->nickname }} " name="nickname" id="nickname" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="first_name">Prénom</label>
            <input value=" {{ $user->first_name }} " name="first_name" id="first_name" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="last_name">Nom</label>
            <input value=" {{ $user->last_name }} " name="last_name" id="last_name" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="city">Ville</label>
            <input value=" {{ $user->city }} " name="city" id="city" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input value=" {{ $user->email }} " name="email" id="email" type="text" tabindex="1" required autofocus>
          </div>
          <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Modifier mes informations</button>
        </form>
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
  @endguest
</div>
@endsection