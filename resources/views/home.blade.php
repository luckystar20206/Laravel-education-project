@extends('layouts.base')
@section('header')
    <h1>
        Hello, Welcome to the news aggregator
    </h1>
    <h2 class="header-description">
        Here, you can see some news of the day
    </h2>
@endsection
@section('nav')
    <ul>
        <li>Homepage</li>
        <li><a href="{{url('/info')}}">Project info</a></li>
        <li><a href="{{url('/news')}}">News</a></li>
    </ul>
@endsection
