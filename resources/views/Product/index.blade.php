@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="shop-page">

<section class="header-bottom">
  <h1>GAME ZONE</h1>
  <p>Boutique souvenirs</p>
</section>

<div class="product">
  @foreach ($products as $product)
  
    <div class="productcontent">
  <img src="{{ asset('storage/'.$product->image_url) }}">
      {{ $product->name }}<br>
      {{ $product->description }}<br>
      <span class="priceproduct">{{ $product->price }}€</span><br>
        @if (Auth::check())
        <br><form action="{{ route('CartItem.store') }}" method="POST" >
          @csrf
          <div class="form-group-index editinput">
            <label for="quantity">Quantité</label>
            <input name="quantity" id="quantity" type="number" tabindex="1" required autofocus>
            <input type="hidden" name="product_id" value="{{ $product->id }}">
          </div>
          <div class="buttonModifyIndex">
            <button class="editbutton bold" name="submit" type="submit" id="contact-submit">Ajouter au panier</button>
          </div>
        @else
          <p><a href="{{ route('login') }}" title="Se connecter">Connectez-vous</a> pour ajouter ce produit à votre panier !</p>
        @endif
      </form>
      <div class="adminbuttonindex">
        @if (Auth::check())
          @if (Auth::user()->admin === 1)
            <a href="{{ route('Product.edit', ['Product' => $product->id]) }}" class="btn btn-primary">
              <button class="editbuttonaccount adminButton"><span class="fa "> Modifier le produit</span>
              </button>
            </a>
            <form action="{{ route('Product.destroy', ['Product' => $product->id]) }}" method="POST" style="display: contents">
              @csrf
              @method('DELETE')
              <button class="deletebuttonaccount" type="submit">
                <span class="fa ">Supprimer le produit</span>
              </button>
            </form>
          @endif
        @endif
      </div>
    </div>
  
  @endforeach
  </div>
  {{ $products->links() }} 
  
  </div>
@endsection