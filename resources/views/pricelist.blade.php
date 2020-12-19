@extends('layouts.app')

@section('content')
<section class="header-bottom">
  <h1>GAME ZONE</h1>
  <p>TARIF</p>
</section>
<section class="pricelistContainer">
  <div class="disclaimer">
    <p>Pour découvrir nos tarifs, nous vous proposons d’effectuer notre simulation d’entrée. 
      Veuillez saisir le nombre de personnes, en fonction de leur âge et vous obtiendrez immédiatement 
      le tarif global pour une journée dans notre parc !</p>
  </div>
  <div class="pricelist">
    <div class="lists">
      <div>
        <label for="lessThan2">Nombre d'enfants entre 0 et 2 ans</label>
      </div>
      <div>
        <span class="price">Palce à 0€</span>
      </div>
      <div>
        <select id="lessThan2" class="select">
          @for ($i = 0; $i < 11; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>
      </div>
    </div>
    <div>
      <div>
        <label for="between2and8">Nombre d'enfants entre 2 et 8 ans</label>
      </div>
      <div>
      <span class="price">Palce à 12.50€</span>
      </div>
      <div>
        <select name="between2and8" id="between2and8" class="select">
          @for ($i = 0; $i < 11; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>
      </div>
      </div>
    <div>
      <div>
        <label for="moreThan8">Nombre d'enfants mineurs de plus de 8 ans</label>
      </div>
      <div>
        <span class="price">Palce à 13.50€</span>
      </div>
      <div>
        <select name="moreThan8" id="moreThan8" class="select">
          @for ($i = 0; $i < 11; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>
      </div>
    </div>
    <div>
      <div>
        <label for="adults">Nombre d'adultes (plus de 18 ans)</label>
      </div>
      <div>
        <span class="price">Palce à 15€</span>
      </div>
      <div>
        <select name="adults" id="adults" class="select">
          @for ($i = 0; $i < 11; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>
      </div>
    </div>
    <div>
      <p class="totalPrice">Prix total: <span id="totalPrice">0€</span></p>
    </div>
  </div>
  <div class="preparation">
    <div>
      <p><a href="" title="Se rendre au parc">Se rendre au parc</a></p>
    </div>
    <div>
      <p><a href="" title="Tarifs et billetterie">Tarif et billetterie</a></p>
    </div>
  </div>
</section>
<script type="text/javascript" src="{{ asset('js/pricelist.js') }}"></script>

@endsection
