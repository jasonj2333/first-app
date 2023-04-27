@extends('layout.app')

@section('title', 'Edycja strony')

@section('content')
    <h1>Edutuj stronę</h1>
    <form action="/strony" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tytuł</label>
            <input type="text" class="form-control" name="title" value={{$page->title}}>
        </div>
        <div class="form-group">
            <label for="slug">Alias</label>
            <input type="text" class="form-control" name="slug" value={{$page->slug}}>
        </div>
        <div class="form-group">
            <label for="title">Treść</label>
            <textarea class="form-control" name="content">{{$page->content}}</textarea>
        </div>
        <input type="hidden" name="hidden_id" value={{$page->id}}>
        <button class="btn btn-primary">Zmień</button>
    </form>
@endsection