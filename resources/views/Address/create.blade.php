@extends('layouts.app')

@section('content')
<div class="container">
  @guest
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    <div class="row">
      <div class="col-8">
        <form action="{{ route('Address.store') }}" method="POST" >
          @csrf
          <div class="form-group">
            <label for="address">Adresse</label>
            <input name="address" id="address" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="zip_code">Code Postal</label>
            <input name="zip_code" id="zip_code" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="city">Ville</label>
            <input name="city" id="city" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="country">Pays</label>
            <input name="country" id="country" type="text" tabindex="1" required autofocus>
          </div>
          <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Modifier mes informations</button>
        </form>
        {{-- <form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST" style="display: contents">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">
            <span class="fa fa-trash">Supprimer le compte</span>
          </button>
        </form> --}}
      </div>
    </div>
  @endguest
</div>
@endsection