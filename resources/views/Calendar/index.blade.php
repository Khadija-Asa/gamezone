@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="calendarContainer">
  <div class="calendar">
    <table>
      <th>L</th>
      <th>M</th>
      <th>M</th>
      <th>J</th>
      <th>V</th>
      <th>S</th>
      <th>D</th>
      <tr>
        @for ($j = 0; $j < $monthOffset; $j++) <!-- On ajoute autant de case que necessaire pour combler la première semaine -->
        <td>
        </td>
        @endfor
        @for ($i = 0; $i < $days; $i++)
          @if ($i+1 == $firstTuesday) <!-- Si on est sur la case du premier mardi du mois -->
            <td class="closed">
              {{ $i+1 }}
            </td>
          @else
            @if (date('l', $first_day_timestamp+86400*$i) === 'Monday') <!-- Si on arrive à un Lundi, on change de ligne -->
              </tr>
              <tr>
            @endif
            @if (date('l', $first_day_timestamp+86400*$i) === 'Friday' || date('l', $first_day_timestamp+86400*$i) === 'Saturday') <!-- Si le jour est Vendredi ou Samedi -->
              <td class="byNight">
                {{ $i+1 }}
              </td>
            @else
              @if ($i+1 == $lastSunday)<!-- Si on arrive au dernier dimanche du mois -->
                <td class="special">
                  {{ $i+1 }}
                </td>
              @else <!-- Un jour normal -->
                <td class="ordinary">
                  {{ $i+1 }}
                </td>
              @endif
            @endif
          @endif
        @endfor
      </tr>
    </table>
  </div>
</div>
@endsection