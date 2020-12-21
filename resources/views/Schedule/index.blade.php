@extends('layouts.app')

@section('content')
<div class="containerHours">
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
              <a href="{{ route('Schedule.edit', ['Schedule' => $day->id]) }}" class="btn btn-primary">
                <button class="editbuttonaccount adminButton"><span class="fa ">Modifier</span>
                </button>
              </a>
              <form action="{{ route('Schedule.destroy', ['Schedule' => $day->id]) }}" method="POST" style="display: contents">
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
  <a href="{{ route('Schedule.create') }}" class="btn btn-primary">
    <button class="editbuttonaccount adminButton"><span class="fa ">Ajouter une horaire</span>
    </button>
  </a>
</div>
@endsection