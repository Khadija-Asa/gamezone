@extends('layouts.app')

@section('content')
<div class="container">
  @guest
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
  @if (Auth::user()->admin === 1)
      <div class="row">
        <div class="col-8">
          <form action="{{ route('Attraction.store') }}" enctype="multipart/form-data" method="POST" >
            @csrf
            <div class="form-group">
              <label for="name">Nom</label>
              <input name="name" id="name" type="text" tabindex="1" required autofocus>
            </div>
            <div class="form-group">
              <label for="logo">Logo de l'attraction</label>
              <input name="logo" id="logo" type="file" tabindex="1" required autofocus>
            </div>
            <div class="form-group">
              <label for="bg_image">Image de fond</label>
              <input name="bg_image" id="bg_image" type="file" tabindex="1" required autofocus>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" tabindex="1" required autofocus></textarea>
            </div>
            <div class="form-group">
              <label for="important_informations">Information importantes</label>
              <textarea name="important_informations" id="important_informations" tabindex="1" required autofocus></textarea>
            </div>
            <div class="form-group">
              <label for="min_height">Taille minimum</label>
              <select name="min_height" id="min_height">
                <option value="110">1m10</option>
                <option value="130">1m30</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exp_given">Expérience gagnée</label>
              <input name="exp_given" id="exp_given" type="number" tabindex="1" required autofocus>
            </div>
            <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Ajouter une attraction</button>
          </form>
        </div>
      </div>
    @else
      <p>Vous n'avez pas la permission d'accéder à cette page</p>
    @endif
  @endguest
</div>
@endsection