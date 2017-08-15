@extends('layouts.app')
@section('content')
    <div class="jumbotron index-jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is home page.</p>
        <p>
            <a class="btn btn-primary btn-lg my-btn" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg my-btn" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection
