@extends('layouts.app')

@section('content')
<div class="containerHours">
  <h2>Liste des utilisateurs</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Utilisateur</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
            <td>
              {{ $user->nickname }}
            </td>
            <td>
              <a href="{{ route('User.show', ['User' => $user->id]) }} " class="btn btn-success">
                <span class="fa fa-eye"> Détails</span>
              </a>&nbsp;
              <a href="{{ route('User.edit', ['User' => $user->id]) }}" class="btn btn-primary">
                <span class="fa "> Modifier</span>
              </a>&nbsp;
              <form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST" style="display: contents">
                @csrf
                @method('DELETE')
                <button class="editbuttonaccount" type="submit">
                  <span class="fa ">Supprimer</span>
                </button>
              </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection