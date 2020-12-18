@extends('layouts.app')

@section('content')
<div class="container">
  <div class="editaccountcontent">
    <div class="col-8">
      <form action="{{ route('Attraction.update', ['Attraction'=>$attraction->id]) }}" enctype="multipart/form-data" method="POST" >
        @csrf
        @method('PUT')
        <div class="form-group editinput">
          <label for="name">Nom</label>
          <input name="name" id="name" type="text" tabindex="1" required autofocus value="{{ $attraction->name }}">
        </div>
        <div class="form-group editinput">
          <label for="logo">Logo de l'attraction</label>
          <img src="{{ asset('storage/'.$attraction->logo_url.'') }}" style="max-width: 200px;"><br>
          <input name="logo" id="logo" type="file" tabindex="1" autofocus>
        </div>
        <div class="form-group editinput">
          <label for="bg_image">Image de fond</label>
          <img src="{{ asset('storage/'.$attraction->bg_image_url.'') }}" style="max-width: 200px;"><br>
          <input name="bg_image" id="bg_image" type="file" tabindex="1" autofocus>
        </div>
        <div class="form-group editinput">
          <label for="description">Description</label>
          <textarea name="description" id="description" tabindex="1" required autofocus>{{ $attraction->description }}</textarea>
        </div>
        <div class="form-group editinput">
          <label for="important_informations">Information importantes</label>
          <textarea name="important_informations" id="important_informations" tabindex="1" required autofocus>{{ $attraction->important_informations }}</textarea>
        </div>
        <div class="form-group editinput">
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
        <div class="form-group editinput">
          <label for="exp_given">Expérience gagnée</label>
          <input name="exp_given" id="exp_given" type="number" tabindex="1" required autofocus value="{{ $attraction->exp_given }}">
        </div>
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Modifier l'attraction</button>
        </div>
      </form>
      <div class="buttonModify">
        <form action="{{ route('Attraction.destroy', ['Attraction' => $attraction->id]) }}" method="POST" style="display: contents">
          @csrf
          @method('DELETE')
          <button class="editbutton" type="submit">
            <span class="fa fa-trash">Supprimer l'attraction</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection