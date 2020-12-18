@extends('layouts.app')

@section('title', 'Tous les utilisateurs')

@section('content')

  @foreach ($products as $product)
      {{ $product->name }}<br>
      {{ $product->description }}<br>
      {{ $product->price }}<br>
      <img src="{{ asset('storage/'.$product->image_url) }}"><br>
  @endforeach
@endsection