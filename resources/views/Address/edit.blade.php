@extends('layouts.app')

@section('content')
<div class="container">
  <div class="editaccountcontent">
    <div class="col-8">
      <form action="{{ route('Address.update', ['Address'=>$address->id]) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="form-group editinput">
          <label for="address">Adresse</label>
          <input value=" {{ $address->address }} " name="address" id="address" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="zip_code">Cope postal</label>
          <input value=" {{ $address->zip_code }} " name="zip_code" id="zip_code" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="city">Ville</label>
          <input value=" {{ $address->city }} " name="city" id="city" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="country">Pays</label>
          <input value=" {{ $address->country }} " name="country" id="country" type="text" tabindex="1" required autofocus>
        </div>
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Modifier l'addresse</button>
        </div>
      </form>
      <div class="buttonModify">
        <form action="{{ route('Address.destroy', ['Address' => $address->id]) }}" method="POST" style="display: contents">
          @csrf
          @method('DELETE')
          <button class="editbutton" type="submit">
            <span class="fa fa-trash">Supprimer l'addresse</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection