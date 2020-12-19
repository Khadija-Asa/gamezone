@extends('layouts.app')

@section('content')
<div class="containerHours">
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
        @if(Auth::user()->id === $cart->user_id || Auth::user()->admin === 1)

            @foreach ($cart->cart_items as $item)
            <tr>
                <td>
                {{ $item->product->name }}
                </td>
                <td>
                {{ $item->quantity }}
                </td>
                <td>
                {{ $item->product->price }}
                </td>
                <td>
                    {{ $item->product->price * $item->quantity }}
                </td>
                <td>
                  @if(!($cart->status === 'paid'))
                    <form action="{{ route('CartItem.destroy', ['CartItem' => $item->id]) }}" method="POST" style="display: contents">
                    @csrf
                    @method('DELETE')
                    <button class="editbuttonaccount" type="submit">
                        <span class="fa fa-trash">Supprimer</span>
                    </button>
                    </form>
                  @endif
                </td>
            </tr>
            @endforeach
        @else
            <p>Vous n'avez pas la permission de consulter ce panier</p>
        @endif
    </tbody>
  </table>
</div>
@endsection