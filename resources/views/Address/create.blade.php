@extends('layouts.app')

@section('content')
<div class="container">
  <div class="editaccountcontent">
    <div class="col-8">
      <form action="{{ route('Address.store') }}" method="POST" >
        @csrf
        <div class="form-group editinput">
          <label for="address">Adresse</label>
          <input name="address" id="address" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="zip_code">Code Postal</label>
          <input name="zip_code" id="zip_code" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="city">Ville</label>
          <input name="city" id="city" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="country">Pays</label>
          <input name="country" id="country" type="text" tabindex="1" required autofocus>
        </div>
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Ajouter une addresse</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection