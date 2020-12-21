@extends('layouts.app')

@section('content')
<section class="header-bottom">
        <h1>GAME ZONE</h1>
        <p>Le premier parc d’attraction <br>
        au monde entièrement dédié à <br>
        l’univers des jeux-vidéos.</p>
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">Pseudo</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control @error('name') is-invalid @enderror" name="nickname" value="{{ old('name') }}" required autocomplete="nickname" autofocus>

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Adresse e-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">Prénom</label>

                            <div class="col-md-6">
                                <input id="first_name" type="first_name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                                <input id="last_name" type="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">Ville</label>

                            <div class="col-md-6">
                                <input id="city" type="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmation du mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="avatar-group">
                        <div class="avatar-register">
                          <label for="avatar1" class="col-md-4 col-form-label text-md-right">
                            <img src="{{ asset('images/avatars/1.png') }}" style="max-width: 200px;" alt="avatar">
                          </label>
                          <input type="radio" id="avatar1" name="avatar" value="images/avatars/1.png">
                          </div>
                          <div class="avatar-register">
                          <label for="avatar2" class="col-md-4 col-form-label text-md-right">
                            <img src="{{ asset('images/avatars/2.png') }}" style="max-width: 200px;" alt="avatar">
                          </label>
                          <input type="radio" id="avatar2" name="avatar" value="images/avatars/2.png">
                          </div>
                          <div class="avatar-register">
                          <label for="avatar3" class="col-md-4 col-form-label text-md-right">
                            <img src="{{ asset('images/avatars/3.png') }}" style="max-width: 200px;" alt="avatar">
                          </label>
                          <input type="radio" id="avatar3" name="avatar" value="images/avatars/3.png">
                          </div>
                          <div class="avatar-register">
                          <label for="avatar4" class="col-md-4 col-form-label text-md-right">
                            <img src="{{ asset('images/avatars/4.png') }}" style="max-width: 200px;" alt="avatar">
                          </label>
                          <input type="radio" id="avatar4" name="avatar" value="images/avatars/4.png">
                          </div>
                        </div>

                        <div class="row mb-0 register">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary registerbutton">
                                    {{ __('S\'inscrire') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
