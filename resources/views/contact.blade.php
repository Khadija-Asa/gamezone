@extends('layouts.app')

@section('content')
<div class="container-contact">
  <div class="row">
    <div class="col-8">
      @if (isset($success))
        <p>Message envoyé !</p>
      @endif
      <form action="{{ route('mail.send')  }}" method="POST" >
        @csrf
        <div class="contact-part">
        <div class="contact-part-one">
        <div class="form-group-contact">
          <label for="name">Nom</label>
          <input name="name" id="name" type="text" tabindex="1" required autofocus>
        </div>
        <div class="form-group-contact">
          <label for="mail">Adresse mail</label>
          <input name="mail" id="mail" type="text" tabindex="1" required autofocus>
        </div>
        </div>
        <div class="contact-part-two">
        <div class="form-group-contact">
          <label for="message">Message</label>
          <textarea name="message" id="message" type="text" tabindex="1" rows="7" cols="33" required autofocus></textarea>
        </div>
        </div>
        </div>
        <div class="contactbutton">
        <button class="btn btn-primary" name="submit" type="submit" id="contact-submit">Envoyer le message</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection