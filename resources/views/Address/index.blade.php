@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="container">
  @guest
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    <div class="row">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Adresse :</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @if (isset($addresses))
            @foreach ($addresses->addresses as $address)
                <tr>
                  <td>
                    {{ $address->address->address }}, {{ $address->address->zip_code }} {{ $address->address->city }} {{ $address->address->country }}
                  </td>
                  <td>
                    <a href="{{ route('Address.edit', ['Address' => $address->address->id]) }}" class="btn btn-primary">
                      <span class="fa fa-edit"> Modifier</span>
                    </a>
                    <form action="{{ route('Address.destroy', ['Address' => $address->address->id]) }}" method="POST" style="display: contents">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">
                        <span class="fa fa-trash">Supprimer</span>
                      </button>
                    </form>
                  </td>
                </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  @endguest
</div>
@endsection