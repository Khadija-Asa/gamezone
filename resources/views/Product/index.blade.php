@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')

  @foreach ($products as $product)
  <div class="product">
      {{ $product->name }}<br>
      {{ $product->description }}<br>
      {{ $product->price }}<br>
      <img src="{{ asset('storage/'.$product->image_url) }}">
        @if (Auth::check())
        <br><form action="{{ route('CartItem.store') }}" method="POST" >
          @csrf
          <div class="form-group editinput">
            <label for="quantity">Quantité</label>
            <input name="quantity" id="quantity" type="number" tabindex="1" required autofocus>
            <input type="hidden" name="product_id" value="{{ $product->id }}">
          </div>
          <div class="buttonModify">
            <button class="editbutton" name="submit" type="submit" id="contact-submit">Ajouter au panier</button>
          </div>
        @else
          <p><a href="{{ route('login') }}" title="Se connecter">Connectez-vous</a> pour ajouter ce produit à votre panier !</p>
        @endif
      </form>
          @if (Auth::user()->admin === 1)
            <a href="{{ route('Product.edit', ['Product' => $product->id]) }}" class="btn btn-primary">
              <button class="editbuttonaccount adminButton"><span class="fa fa-edit"> Modifier le produit</span>
              </button>
            </a>
            <form action="{{ route('Product.destroy', ['Product' => $product->id]) }}" method="POST" style="display: contents">
              @csrf
              @method('DELETE')
              <button class="editbutton" type="submit">
                <span class="fa fa-trash">Supprimer le produit</span>
              </button>
            </form>
          @endif
  </div>
  @endforeach
  {{ $products->links() }} 
@endsection