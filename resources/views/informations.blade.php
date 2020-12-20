@extends('layouts.app')

@section('content')

<section class="header-bottom">
  <h1>GAME ZONE</h1>
  <p>INFORMATIONS</p>
</section>


<section class="informations">

  <div class="paragraphe">
    <p><span>GEEK CYBERCENTER</span> est une SAS au capital de 45 824 123 euros. Il s’agit d’un groupe possédant plusieurs parcs d’attractions dans le monde comme : BATTLE KART VR, FORTNITE ADVENTURE, PUBG SURVIVOR. Ouvert en septembre 2019 c’est le premier parc d’attraction au monde entièrement dédié à l’univers des jeux-vidéo.

    <br> vous soyez, <span>petit</span> ou <span>grand, gamer confirmé</span> ou <span>débutant</span>, toutes les attractions vous assurent une journée riche en rires et en action, encadré par nos mesures de sécurité et sanitaire. Bienvenue dans ce nouveau monde !
    </p>
  </div>

  <div class="image-information">
    
  </div>

  <div class="paragraphe">
    <p><span>NOTRE MISSION</span><br>
Nous nous consacrons à la création des expériences ludiques les plus épiques qui aient jamais existé. Vous pourrez essayer des attractions uniques que vous ne trouverez nul part ailleurs et qui contribueront à faire augmenter votre jauge d’expérience, seul ou en équipe, devenez le numéro 1 !</p>
  </div>

  <div class="news">
    <p><span>ILS PARLENT DE NOUS DANS LES JOURNAUX</span><br>
      <div class="news-images">
        <img src="{{ asset('images/breakingnews.png') }}" alt="Journal présentant Gamezone">
        <img src="{{ asset('images/newspaper.png') }}" alt="Journal présentant Gamezone">
      </div>
    </p>
     <p><span>ET DANS LES MAGASINES</span><br>
      <div class="news-images">
        <img src="{{ asset('images/news1.png') }}" alt="Magasine présentant Gamezone">
        <img src="{{ asset('images/news2.png') }}" alt="Magasine présentant Gamezone">
        <img src="{{ asset('images/news3.png') }}" alt="Magasine présentant Gamezone">
      </div>
    </p>
  </div>

</section>



@endsection