@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<section class="header-bottom-calendar">
        <h1>GAME ZONE</h1>
        <p>Le premier parc d’attraction <br>
        au monde entièrement dédié à <br>
        l’univers des jeux-vidéos.</p>
    </section>

<div class="calendarContainer">
  <div class="calendar">
    <h2>DATE DU JOUR</h2>
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
  <div class="day-open">
    <div class="day">
      <div class="square-close"></div>
      <p>parc fermé</p>
    </div>
    <div class="day">
      <div class="square-open"></div>
      <p>parc ouvert</p>
    </div>
    <div class="day">
      <div class="square-special"></div>
      <p>Journée spécial</p>
    </div>
    <div class="day">
      <div class="square-night"></div>
      <p>Nocturne</p>
    </div>
  </div>

  <div class="days-special">
    <div class="day-special">
      <h3>Journée spéciale</h3>
      <p>Textdsc vxd vsff vs dvsd v wdv dd vx ddv sdv sf v fsv fs v<br>
    wwwwwwwwwwwwwwwwwwwwwwww</p>
    </div>
    <div class="day-special">
      <h3>Nocturne</h3>
      <p>Textdsc vxd vsff vs dvsd v wdv dd vx ddv sdv sf v fsv fs v<br>
    wwwwwwwwwwwwwwwwwwwwwwww</p>
    </div>
  </div>
  <h2>Préparer sa visite</h2>
  <div class="preparation">
    <div>
      <p><a href="" title="Se rendre au parc">Se rendre au parc</a></p>
    </div>
    <div>
      <p><a href="" title="Tarifs et billetterie">Tarif et billetterie</a></p>
    </div>
  </div>
</div>

@endsection