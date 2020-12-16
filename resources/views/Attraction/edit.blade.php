@extends('layouts.app')

@section('content')
<div class="container">
  @guest
    <p>Vous n'avez pas la permission d'accéder à cette page</p>
  @else
    @if (Auth::user()->admin === 1)
    <div class="row">
      <div class="col-8">
        <form action="{{ route('Attraction.update', ['Attraction'=>$attraction->id]) }}" enctype="multipart/form-data" method="POST" >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Nom</label>
            <input name="name" id="name" type="text" tabindex="1" required autofocus value="{{ $attraction->name }}">
          </div>
          <div class="form-group">
            <label for="logo">Logo de l'attraction</label>
            <img src="{{ asset('storage/'.$attraction->logo_url.'') }}" style="max-width: 200px;"><br>
            <input name="logo" id="logo" type="file" tabindex="1" autofocus>
          </div>
          <div class="form-group">
            <label for="bg_image">Image de fond</label>
            <img src="{{ asset('storage/'.$attraction->bg_image_url.'') }}" style="max-width: 200px;"><br>
            <input name="bg_image" id="bg_image" type="file" tabindex="1" autofocus>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" tabindex="1" required autofocus>{{ $attraction->description }}</textarea>
          </div>
          <div class="form-group">
            <label for="important_informations">Information importantes</label>
            <textarea name="important_informations" id="important_informations" tabindex="1" required autofocus>{{ $attraction->important_informations }}</textarea>
          </div>
          <div class="form-group">
            <label for="min_height">Taille minimum</label>
            <select name="min_height" id="min_height">
            <option value="0">Accessible à tous</option>
              @if ($attraction->min_height === 130)
                <option value="110">1m10</option>
                <option value="130" selected>1m30</option>
              @elseif ($attraction->min_height === 130)
                <option value="110">1m10</option>
                <option value="130" selected>1m30</option>
              @endif
            </select>
          </div>
          <div class="form-group">
            <label for="exp_given">Expérience gagnée</label>
            <input name="exp_given" id="exp_given" type="number" tabindex="1" required autofocus value="{{ $attraction->exp_given }}">
          </div>
          <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Modifier l'attraction</button>
        </form>
        <form action="{{ route('Attraction.destroy', ['Attraction' => $attraction->id]) }}" method="POST" style="display: contents">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">
            <span class="fa fa-trash">Supprimer l'attraction</span>
          </button>
        </form>
      </div>
    </div>
    @endif
  @endguest
</div>
@endsection