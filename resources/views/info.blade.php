@extends('layouts.base')
@section('header')
    <h2 class="header-description">
        Information of this project
    </h2>
@endsection
@section('nav')
    <ul>
        <li><a href="{{route('home')}}">Homepage</a></li>
        <li>Project info</li>
        <li><a href="{{route('news')}}">News</a></li>
    </ul>
@endsection
@section('content')
    <main>
        <h4>
            The project created while studying at GeekBrains in a Laravel course
        </h4>
    </main>
@endsection
