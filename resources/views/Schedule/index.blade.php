@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="container">
  @if (Auth::user()->admin === 1)
    <div class="row">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Jour</th>
            <th>Ouverture</th>
            <th>Fermeture</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($days as $day)
              <tr>
                <td>
                  {{ $day->day }}
                </td>
                <td>
                  {{ $day->start_hour }}
                </td>
                <td>
                  {{ $day->end_hour }}
                </td>
                <td>
                  <a href="{{ route('Schedule.edit', ['Schedule' => $day->id]) }}" class="btn btn-primary" title="modifier">
                    <span class="fa fa-edit"> Modifier</span>
                  </a>
                  <form action="{{ route('Schedule.destroy', ['Schedule' => $day->id]) }}" method="POST" style="display: contents">
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
      <a href="{{ route('Schedule.create') }}" class="btn btn-primary" title="ajouter horaire">
        <span class="fa fa-edit"> Ajouter une horaire</span>
      </a>
    </div>
  @else
    <p>Vous n'avez pas la permission d'accéder à cette page !</p>
  @endif
</div>
@endsection