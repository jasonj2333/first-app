@extends('layout.app')

@section('title', 'Dodaj nową stronę')

@section('content')
    <h1>Dodaj nową stronę</h1>
    <form action="/strony" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Tytuł</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="slug">Alias</label>
            <input type="text" class="form-control" name="slug">
        </div>
        <div class="form-group">
            <label for="title">Treść</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <button class="btn btn-primary">Dodaj</button>
    </form>
@endsection