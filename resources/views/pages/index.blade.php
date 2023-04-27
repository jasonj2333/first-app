@extends('layout.app')

@section('title', 'Spis stron')

@section('content')
    <h1>Moje strony</h1>
    @foreach ($pages as $page)
        <h2>{{ $page->title }}</h2>
        <p> <a href="{{route('pages.show' ,$page->slug) }}"> >>>Czytaj więcej</a> </p>
        <p><a href="{{route('pages.edit', $page->id)}}">Zmień</a></p>
        <form action="/strony/{{$page->id}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm"> X </button>
        </form>
        <hr>
    @endforeach
@endsection