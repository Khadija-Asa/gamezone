@extends('layouts.app')

@section('content')
<div class="containerHours">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Panier n°</th>
        <th>Client</th>
        <th>Statut</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($carts as $cart)
          <tr>
            <td>
              {{ $cart->id }}
            </td>
            <td>
              {{ $cart->user->nickname }}
            </td>
            <td>
                @if ($cart->status === 'pending')
                    En cours
                @elseif ($cart->status === 'paid')
                    Payé
                @else
                    Erreur
                @endif
            </td>
            <td>
              <a href="{{ route('Cart.show', ['Cart' => $cart->id]) }}" class="btn btn-primary">
                <button class="editbuttonaccount adminButton"><span class="fa ">Voir</span>
                </button>
              </a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection