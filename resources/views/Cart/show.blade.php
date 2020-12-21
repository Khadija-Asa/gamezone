@extends('layouts.app')

@section('content')
<section class="header-bottom">
  <h1>GAME ZONE</h1>
  <h2>Mon panier</h2>
</section>
<div class="containerHours">
  @if(Auth::user()->id === $cart->user_id || Auth::user()->admin === 1)
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Produit</th>
          <th>Quantité</th>
          <th>Prix Unitaire</th>
          <th>Sous total</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
              @foreach ($cart->cart_items as $item)
              <tr>
                  <td>
                  {{ $item->product->name }}
                  </td>
                  <td>
                  {{ $item->quantity }}
                  </td>
                  <td>
                  {{ $item->product->price }} €
                  </td>
                  <td>
                      {{ $item->product->price * $item->quantity }} €
                  </td>
                  <td>
                    @if(!($cart->status === 'paid'))
                      <form action="{{ route('CartItem.destroy', ['CartItem' => $item->id]) }}" method="POST" style="display: contents">
                      @csrf
                      @method('DELETE')
                      <button class="editbuttonaccount" type="submit">
                          <span class="fa ">Supprimer</span>
                      </button>
                      </form>
                    @endif
                  </td>
              </tr>
              @endforeach
      </tbody>
    </table>
  @else
      <p>Vous n'avez pas la permission de consulter ce panier</p>
  @endif
  @if(!($cart->status === 'paid'))
    <a href="{{ route('order', ['id' => $cart->id]) }}" class="btn btn-primary">
      <button class="editbuttonaccount adminButton"><span class="fa ">Commander</span>
      </button>
    </a>
  @endif
</div>
@endsection