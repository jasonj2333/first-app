@extends('layout.app')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>
    <p>{{ $page->created_at }}</p>
    <p>{{ $page->content }}</p>
@endsection