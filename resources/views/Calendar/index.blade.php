@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="container">
  <table>
    <tr>
      @for ($i = 0; $i < $days; $i++)
        @if (date('l', $first_day_timestamp+86400*$i) === 'Monday')
          </tr>
          <tr>
        @endif
        <td style="border: 1px solid black; padding: 5px;">
          {{ date('l', $first_day_timestamp+86400*$i) }} {{ $i+1 }} {{ $month }}
        </td>
      @endfor
    </tr>
  </table>
</div>
@endsection