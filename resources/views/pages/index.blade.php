@extends('layout.app')

@section('title', 'Spis stron')

@section('content')
    <h1>Moje strony</h1>
    @foreach ($pages as $page)
        <h2>{{ $page->title }}</h2>
        <p> <a href="strony/{{ $page->slug }}"> >>>Czytaj więcej</a> </p>
        <hr>
    @endforeach
@endsection