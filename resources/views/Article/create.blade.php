@extends('layouts.app')

@section('content')
<div class="container">
  <div class="editaccountcontent">
    <div class="col-8">
      <form action="{{ route('Article.store') }}" enctype="multipart/form-data" method="POST" >
        @csrf
        <div class="form-group editinput">
          <label for="title">Titre</label>
          <input name="title" id="title" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group editinput">
          <label for="content">Contenu</label>
          <textarea name="content" id="content" tabindex="1" required autofocus cols="50" rows="20"></textarea>
        </div>
        <div class="buttonModify">
          <button class="editbutton" name="submit" type="submit" id="contact-submit">Publier l'article</button>
        </div>
      </form>
    </div>
  </div>
      
</div>
@endsection