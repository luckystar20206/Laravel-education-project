@extends('layouts.base')
@section('header')
    <h2 class="header-description">
        Here, you can see news categories
    </h2>
@endsection
@section('content')
    <ul>
        @foreach ($categories as $key => $el)
            <a href="{{route('news.category', $key)}}">
                <li>
                    {{$el}}
                </li>
            </a>
        @endforeach
    </ul>
@endsection
