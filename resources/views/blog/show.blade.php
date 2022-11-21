@extends('layouts.app')
@section('content')
    <h1>Blog</h1>
    <a href="{{route('articles.index')}}">Back</a>
    <hr>
    <h1>{{ $article->title }}</h1>
    <h3>{{ $article->description }}</h3>
    <em>{{ $article->created_at }}</em>
@endsection
