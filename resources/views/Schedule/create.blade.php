@extends('layouts.app')

@section('content')
<div class="container">
  @if(Auth::user()->admin !== 1)
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    <div class="row">
      <div class="col-8">
        <form action="{{ route('Schedule.store') }}" method="POST" >
          @csrf
          <div class="form-group">
            <label for="day">Jour</label>
            <select name="day" id="day" tabindex="1" required autofocus>
              @foreach ($daysList as $dayOfList)
                <option value="{{ $dayOfList }}">{{ $dayOfList }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="start_hour">Heure d'ouverture</label>
            <select name="start_hour" id="start_hour" tabindex="1" required autofocus>
              @foreach ($hours as $hour)
                <option value="{{ $hour }}">{{ $hour }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="end_hour">Heure de fermeture</label>
            <select name="end_hour" id="end_hour" tabindex="1" required autofocus>
              @foreach ($hours as $hour)
                <option value="{{ $hour }}">{{ $hour }}</option>
              @endforeach
            </select>
          </div>
          <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Ajouter les horaires</button>
        </form>
      </div>
    </div>
  @endguest
</div>
@endsection