@extends('layouts.app')
@section('content')
    <h1>Blog</h1>
    <hr>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="email">Email</span>
            <input type="email" class="form-control" placeholder="Email" name="email" required="required" autofocus="autofocus">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="password">Password</span>
            <input type="password" class="form-control" name="password" required="required" autocomplete="current-password">
        </div>
        @include('layouts.errors')
        <br>
        <button class="btn btn-primary" type="submit">Log in</button>
    </form>
@endsection
