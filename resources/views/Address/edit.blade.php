@extends('layouts.app')

@section('content')
<div class="container">
  @guest
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    <div class="row">
      <div class="col-8">
        <form action="{{ route('Address.update', ['Address'=>$address->id]) }}" method="POST" >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="address">Adresse</label>
            <input value=" {{ $address->address }} " name="address" id="address" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="zip_code">Cope postal</label>
            <input value=" {{ $address->zip_code }} " name="zip_code" id="zip_code" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="city">Ville</label>
            <input value=" {{ $address->city }} " name="city" id="city" type="text" tabindex="1" required autofocus>
          </div>
          <div class="form-group">
            <label for="country">Pays</label>
            <input value=" {{ $address->country }} " name="country" id="country" type="text" tabindex="1" required autofocus>
          </div>
          <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Modifier l'adresse</button>
        </form>
        <form action="{{ route('Address.destroy', ['Address' => $address->id]) }}" method="POST" style="display: contents">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">
            <span class="fa fa-trash">Supprimer l'addresse</span>
          </button>
        </form>
      </div>
    </div>
  @endguest
</div>
@endsection