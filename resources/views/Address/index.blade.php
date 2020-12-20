@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="containerHours">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Adresse</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @if (isset($user))
        @foreach ($user->getAddresses as $address)
            <tr>
              <td>
                {{ $address->address->address }}, {{ $address->address->zip_code }} {{ $address->address->city }} {{ $address->address->country }}
              </td>
              <td>
                <a href="{{ route('Address.edit', ['Address' => $address->address->id]) }}" class="editbutton" title="éditer adresse" title="modifier l'adresse">
                  <span class="fa fa-edit"> Modifier</span>
                </a>
                <form action="{{ route('Address.destroy', ['Address' => $address->address->id]) }}" method="POST" style="display: contents">
                  @csrf
                  @method('DELETE')
                  <button class="editbutton" type="submit">
                    <span class="fa fa-trash">Supprimer</span>
                  </button>
                </form>
              </td>
            </tr>
        @endforeach
      @endif
    </tbody>
  </table>
  <br>
  <a href="{{ route('Address.create') }}" class="editbutton" title="lien vers créer adresse">
    <span class="fa fa-edit">Ajouter une adresse</span>
  </a>
</div>
@endsection