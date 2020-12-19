@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')

  @foreach ($products as $product)
      {{ $product->name }}<br>
      {{ $product->description }}<br>
      {{ $product->price }}<br>
      <img src="{{ asset('storage/'.$product->image_url) }}"><br>
      <form action="{{ route('CartItem.store') }}" method="POST" >
        @csrf
        <div class="form-group editinput">
          <label for="quantity">Quantité</label>
          <input name="quantity" id="quantity" type="number" tabindex="1" required autofocus>
          <input type="hidden" name="product_id" value="{{ $product->id }}">
        </div>
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Ajouter au panier</button>
        </div>
      </form>
  @endforeach
@endsection