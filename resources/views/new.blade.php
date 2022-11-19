@extends('layouts.base')
@section('header')
    <h2 class="header-description">
        Here, you can see new that you selected
    </h2>
@endsection
@section('content')
    <main>
        <div class="content-new">
            <img class="bg-card" alt="media" src="{{$new['image-url']}}">
            <h2>{{$new['title']}}</h2>
            <h4>{{$new['description']}}</h4>
            <p class="new-main-text">
                {{$new['text']}}
            </p>
        </div>
    </main>
@endsection
