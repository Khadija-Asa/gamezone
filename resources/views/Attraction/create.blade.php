@extends('layouts.app')

@section('content')
<div class="container">
  <div class="editaccountcontent">
    <div class="col-8">
      <form action="{{ route('Attraction.store') }}" enctype="multipart/form-data" method="POST" >
        @csrf
        <div class="form-group editinput">
          <label for="name">Nom</label>
          <input name="name" id="name" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="logo">Logo de l'attraction</label>
          <input name="logo" id="logo" type="file" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="bg_image">Image de fond</label>
          <input name="bg_image" id="bg_image" type="file" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="description">Description</label>
          <textarea name="description" id="description" tabindex="1" required autofocus></textarea>
        </div>
        <div class="form-group editinput">
          <label for="important_informations">Information importantes</label>
          <textarea name="important_informations" id="important_informations" tabindex="1" required autofocus></textarea>
        </div>
        <div class="form-group">
          <label for="min_height">Taille minimum</label>
          <select name="min_height" id="min_height">
            <option value="0">Accessible à tous</option>
            <option value="110">1m10</option>
            <option value="130">1m30</option>
          </select>
        </div>
        <div class="form-group editinput">
          <label for="exp_given">Expérience gagnée</label>
          <input name="exp_given" id="exp_given" type="number" tabindex="1" required autofocus>
        </div>
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Ajouter une attraction</button>
        </div>
      </form>
    </div>
  </div>
      
</div>
@endsection