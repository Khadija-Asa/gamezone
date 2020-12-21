@extends('layouts.app')

@section('content')
<div class="container">
  <div class="editaccountcontent">
    <div class="col-8">
      <form action="{{ route('Product.store') }}" enctype="multipart/form-data" method="POST" >
        @csrf
        <div class="form-group editinput">
          <label for="name">Nom</label>
          <input name="name" id="name" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="description">Description</label>
          <textarea name="description" id="description" tabindex="1" required autofocus rows="20" cols="50"></textarea>
        </div>
        <div class="form-group editinput">
          <label for="price">Prix</label>
          <input name="price" id="price" type="number" step="0.01" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="image">Image</label>
          <input name="image" id="image" type="file" tabindex="1" required autofocus>
        </div>
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Ajouter un produit</button>
        </div>
      </form>
    </div>
  </div>
      
</div>
@endsection