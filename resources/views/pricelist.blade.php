@extends('layouts.app')

@section('content')

<div>
  <label for="lessThan2">Nombre d'enfants entre 0 et 2 ans</label>
  <select id="lessThan2">
    @for ($i = 0; $i < 10; $i++)
      <option value="{{ $i }}">{{ $i }}</option>
    @endfor
  </select>
</div>
<div>
  <label for="between2and8">Nombre d'enfants entre 2 et 8 ans</label>
  <select name="between2and8" id="between2and8">
    @for ($i = 0; $i < 10; $i++)
      <option value="{{ $i }}">{{ $i }}</option>
    @endfor
  </select>
</div>
<div>
  <label for="moreThan8">Nombre d'enfants mineurs de plus de 8 ans</label>
  <select name="moreThan8" id="moreThan8">
    @for ($i = 0; $i < 10; $i++)
      <option value="{{ $i }}">{{ $i }}</option>
    @endfor
  </select>
</div>
<div>
  <label for="adults">Nombre d'adultes (plus de 18 ans)</label>
  <select name="adults" id="adults">
    @for ($i = 0; $i < 10; $i++)
      <option value="{{ $i }}">{{ $i }}</option>
    @endfor
  </select>
</div>
<div>
  <p id="totalPrice"></p>
</div>
<script type="text/javascript" src="{{ asset('js/pricelist.js') }}"></script>

@endsection
