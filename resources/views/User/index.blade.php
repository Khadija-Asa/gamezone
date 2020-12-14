@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="container">
  @guest
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    @if (Auth::user()->admin === 1)
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Utilisateur :</th>
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
                    </a>
                    <a href="{{ route('User.edit', ['User' => $user->id]) }}" class="btn btn-primary">
                      <span class="fa fa-edit"> Modifier</span>
                    </a>
                    <form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST" style="display: contents">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">
                        <span class="fa fa-trash">Supprimer</span>
                      </button>
                    </form>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <p>Vous n'avez pas la permission d'accéder à cette page !</p>
    @endif
  @endguest
</div>
@endsection