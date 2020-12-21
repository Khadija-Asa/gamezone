@extends('layouts.app')

@section('content')
<div class="container">
  <div class="editaccountcontent">
    <div class="col-8">
      <form action="{{ route('Schedule.update', ['Schedule' => $day->id]) }}" method="POST" >
        @csrf
        @method('PUT')
        <p style="color: black">Jour: {{ $day->day }}</p>
        <div class="form-group editinput">
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
        <div class="form-group editinput">
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
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Modifier les horaires</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection