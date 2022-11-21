@extends('layouts.app')
@section('content')
    <h1>Blog</h1>
    <hr>
    @foreach($articles as $article)
        <h2>{{ $article->title }}</h2>
        <a href="{{route('articles.show', $article->id) }}">more...</a>
        <hr>
    @endforeach
@endsection
