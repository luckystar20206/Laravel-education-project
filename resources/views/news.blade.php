@extends('layouts.base')
@section('header')
    <h2 class="header-description">
        Here, you can see some news of the day
    </h2>
@endsection
@section('nav')
    <ul>
        <li><a href="{{route('home')}}">Homepage</a></li>
        <li><a href="{{route('info')}}">Project info</a></li>
        <li>News</li>
    </ul>
@endsection
@section('content')
    <div class="cards">
        @foreach ($news as $key => $el)
            <div class="new-card">
                <a href="{{route('new', $key)}}">
                    <img class="bg-card" src="{{$el['image-url']}}" alt="media">
                    <h4 class="new-card__title">{{$el['title']}}</h4>
                    <h6 class="new-card__desc">{{$el['description']}}</h6>
                </a>
            </div>
        @endforeach
    </div>
@endsection
