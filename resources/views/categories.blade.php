@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Here, you can see news categories
    </h2>
@endsection
@section('content')
    <ul>
        @forelse ($categories as $el)
            <a href="{{route('news.categories.category', $el)}}">
                <li>
                    {{$el->title}}
                </li>
            </a>
        @empty
            <p>Нет категорий</p>
        @endforelse
    </ul>
@endsection
