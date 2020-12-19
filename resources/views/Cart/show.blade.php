@extends('layouts.app')

@section('content')
<div class="containerHours">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Montant</th>
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
                {{ $item->product->price * $item->quantity }}
            </td>
            <td>
              <!-- <form action="{{ route('Cart.destroy', ['Cart' => $cart->id]) }}" method="POST" style="display: contents">
                @csrf
                @method('DELETE')
                <button class="editbuttonaccount" type="submit">
                  <span class="fa fa-trash">Supprimer</span>
                </button>
              </form> -->
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection