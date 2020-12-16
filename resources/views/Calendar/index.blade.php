@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="container">
  <table>
    <tr>
      @for ($j = 0; $j < $monthOffset; $j++) <!-- On ajoute autant de case que necessaire pour combler la première semaine -->
      <td style="border: 1px solid black; padding: 5px;">
      </td>
      @endfor
      @for ($i = 0; $i < $days; $i++)
        @if ($i+1 == $firstTuesday) <!-- Si on est sur la case du premier mardi du mois -->
          <td style="background-color: #C4C4C4; border: 1px solid black; padding: 5px;">
            {{ date('l', $first_day_timestamp+86400*$i) }} {{ $i+1 }} {{ $month }}
          </td>
        @else
          @if (date('l', $first_day_timestamp+86400*$i) === 'Monday') <!-- Si on arrive à un Lundi, on change de ligne -->
            </tr>
            <tr>
          @endif
          @if (date('l', $first_day_timestamp+86400*$i) === 'Friday' || date('l', $first_day_timestamp+86400*$i) === 'Saturday') <!-- Si le jour est Vendredi ou Samedi -->
            <td style="background-color: #070B34; border: 1px solid black; padding: 5px;">
              {{ date('l', $first_day_timestamp+86400*$i) }} {{ $i+1 }} {{ $month }}
            </td>
          @else
            @if ($i+1 == $lastSunday)<!-- Si on arrive au dernier dimanche du mois -->
              <td style="background-color: #881F6A; border: 1px solid black; padding: 5px;">
                {{ date('l', $first_day_timestamp+86400*$i) }} {{ $i+1 }} {{ $month }}
              </td>
            @else <!-- Un jour normal -->
              <td style="background-color: #1B8900; border: 1px solid black; padding: 5px;">
                {{ date('l', $first_day_timestamp+86400*$i) }} {{ $i+1 }} {{ $month }}
              </td>
            @endif
          @endif
        @endif
      @endfor
    </tr>
  </table>
</div>
@endsection