@extends('layouts.app')

@section('content')
<section class="header-bottom">
        <h1>GAME ZONE</h1>
        <p>NOUS CONTACTER</p>
    </section>
<div class="container-contact">
  <div class="row-contact">
  <p class="titlecontact">Pour toutes demandes vous pouvez nous contacter :</p>
    <div class="col-contact">
      @if (isset($success))
        <p>Message envoyé !</p>
      @endif
      <form action="{{ route('mail.send')  }}" method="POST" >
        @csrf
        <div class="contact-part">
        <div class="contact-part-one">
        <div class="form-group-contact">
          <label for="name">Nom</label>
          <input name="name" id="name" type="text" placeholder="Nom" tabindex="1" required autofocus>
        </div>
        <div class="form-group-contact">
          <label for="mail">Adresse mail</label>
          <input name="mail" id="mail" type="text" placeholder="Adresse mail" tabindex="1" required autofocus>
        </div>
        </div>
        <div class="contact-part-two">
        <div class="form-group-contact">
          <label for="message">Message</label>
          <textarea name="message" id="message" type="text" placeholder="Message" tabindex="1" rows="7" cols="33" required autofocus></textarea>
        </div>
        </div>
        </div>
        <div class="checkboxcontact">
        <input type="checkbox">
        <p class="rgpdcontact">J'accepte que les informations saisies soient utilisées exclusivement dans le cadre de ma demande.</p>
        </div>
        <div class="contactbutton">
        <button class="buttoncontact" name="submit" type="submit" id="contact-submit">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection