@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Here, you can see news categories
    </h2>
@endsection
@section('content')
    <ul>
        @foreach ($categories as $key => $el)
            <a href="{{route('news.category', $el->id)}}">
                <li>
                    {{$el->title}}
                </li>
            </a>
        @endforeach
    </ul>
@endsection
