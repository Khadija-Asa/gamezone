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
              <a href="{{ route('Cart.edit', ['Cart' => $cart->id]) }}" class="btn btn-primary">
                <button class="editbuttonaccount adminButton"><span class="fa fa-edit">Modifier</span>
                </button>
              </a>
              <form action="{{ route('Cart.destroy', ['Cart' => $cart->id]) }}" method="POST" style="display: contents">
                @csrf
                @method('DELETE')
                <button class="editbuttonaccount" type="submit">
                  <span class="fa fa-trash">Supprimer</span>
                </button>
              </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection