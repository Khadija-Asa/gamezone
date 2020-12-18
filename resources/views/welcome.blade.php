@extends('layouts.app')

@section('content')

<div class="index">

    <section class="header-bottom">
        <h1>GAME ZONE</h1>
        <p>Le premier parc d’attraction <br>
        au monde entièrement dédié à <br>
        l’univers des jeux-vidéos.</p>
    </section>

    <section class="presentation">
        <div class="top">
            <h2>Présentation</h2>
            <p><span>GEEK CYBERCENTER</span> est une société spécialisé dans le <span>jeux vidéos</span>. Elle propose différents moyens de s’amuser,
            de la réalité virtuelle au Kart sous une piste visuelle. Imaginez les <span>sensations inédites</span> que vont vous procurer ces attractions hors du commun ! 
            Ces parcs propose une nouvelle forme de divertissement innovant alliant <span>monde réel et réalité augmentée</span>.
            Geek Cybercenter est un groupe possédant plusieurs parcs d’attractions dans le monde comme : </p>
            <ul>
                <li>BATTLE KART VR</li>
                <li>FORNITE ADVENTURE</li>
                <li>PUBG SURVIVOR et bien d'autres.</li>
            </ul>
            <p>Gamers du monde entier : À vous de jouer !</p>
        </div>

        <div class="center">
            <div>
                <p>9</p>
                <p>attractions</p>
            </div>
            <div>
                <p>5</p>
                <p>restaurants</p>
            </div>
            <div>
                <p>500k</p>
                <p>visiteurs</p>
            </div>
            <div>
                <p>9000</p>
                <p>hectares</p>
            </div>
        </div>
        <div class="bottom"></div>
    </section>

    <section class="main-attraction">
        <h2>LES ATTRACTIONS</h2>
        <div class="top">
            <p>Venez vous <span>amuser</span> dans l’une de nos attractions !<br>
                Massacrez des zombies, provoquez un déluge de la justice ou pilotez des karts : chacunes de nos attractions 
                possèdent ses propres caractéristiques. <span>Testez les toutes !</span></p>
            <a href="{{ route('Attraction.index') }}">En savoir plus</a>
        </div>
        <div class="center">
            <img src="{{ asset('images/gamecente.png') }}" alt="logo-gamecenter">
            <img src="{{ asset('images/awsomeheros.png') }}" alt="logo-awsomeheros">
            <img src="{{ asset('images/championsleaguesurvivor.png') }}" alt="logo-champions-leagie-survivor">
            <img src="{{ asset('images/heroesteam.png') }}" alt="logo-heroesteam">
        </div>
        <div class="bottom"></div>
    </section>
    @if (!is_null($articles))
      <h2>NEWS</h2>
      <section class="articles">
        @foreach ($articles as $article)
          <div class="article">
            <p class="title">{{ $article->title }}</p>
            <p class="content">{{ $article->content }}<br>
            <span class="publishDate">Publié le {{ $article->created_at }}</span></p>
          </div>
        @endforeach  

      </section>
    @else
    @endif

    
    
</div>

@endsection
