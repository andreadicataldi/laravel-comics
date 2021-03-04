@extends('layouts.dashboard')
@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    @if ($comic->cover)
        <img src="{{ asset('storage/' . $comic->cover) }}" alt="">
    @endif
    <p>Disponibile: {{ $comic->availability ? 'Sì' : 'No' }}</p>
    <p>Prezzo: {{ $comic->price }}</p>
@endsection
