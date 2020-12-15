@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      @if (isset($success))
        <p>Message envoyé !</p>
      @endif
      <form action="{{ route('mail.send')  }}" method="POST" >
        @csrf
        <div class="form-group">
          <label for="name">Nom</label>
          <input name="name" id="name" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group">
          <label for="mail">Adresse mail</label>
          <input name="mail" id="mail" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" type="text" tabindex="1" required autofocus></textarea>
        </div>
        <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Envoyer le message</button>
      </form>
    </div>
  </div>
</div>
@endsection