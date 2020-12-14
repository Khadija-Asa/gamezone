@extends('layouts.app')

@section('title', 'Details Produits')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<ul class="list-group">
				<li class="list-group-item active">
					Nom d'affichage: {{ $user->nickname }}
				</li>
				<li class="list-group-item active">
					Email: {{ $user->email }}
				</li>
				<li class="list-group-item active">
					Prénom: {{ $user->first_name }}
				</li>
				<li class="list-group-item active">
					Nom: {{ $user->last_name }}
				</li>
				<li class="list-group-item active">
					Ville: {{ $user->city }}
				</li>
				<li class="list-group-item active">
					Avatar: {{ $user->avatar }}
				</li>
				<li class="list-group-item active">
					Expérience: {{ $user->exp }}
				</li>
				<li class="list-group-item active">
					Administrateur: {{ $user->admin }}
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection