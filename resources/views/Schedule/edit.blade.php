@extends('layouts.app')

@section('content')
<div class="container">
  @if(Auth::user()->admin !== 1)
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    <div class="row">
      <div class="col-8">
        <form action="{{ route('Schedule.update', ['Schedule' => $day->id]) }}" method="POST" >
          @csrf
          @method('PUT')
          <p>Jour: {{ $day->day }}</p>
          <div class="form-group">
            <label for="start_hour">Heure d'ouverture</label>
            <select name="start_hour" id="start_hour" tabindex="1" required autofocus>
              @foreach ($hours as $hour)
                @if ($day->start_hour == $hour)
                  <option value="{{ $hour }}" selected>{{ $hour }}</option>
                @else
                  <option value="{{ $hour }}">{{ $hour }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="end_hour">Heure de fermeture</label>
            <select name="end_hour" id="end_hour" tabindex="1" required autofocus>
              @foreach ($hours as $hour)
                @if ($day->end_hour == $hour)
                  <option value="{{ $hour }}" selected>{{ $hour }}</option>
                @else
                  <option value="{{ $hour }}">{{ $hour }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Modifier les horaires</button>
        </form>
      </div>
    </div>
  @endguest
</div>
@endsection