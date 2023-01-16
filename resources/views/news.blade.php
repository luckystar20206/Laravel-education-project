@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Here, you can see some news of the day
    </h2>
@endsection
@section('content')
    <div class="cards">
        @forelse ($news as $el)
            @include('newPreview', ['new' => $el])
        @empty
            <p>Нет новостей</p>
        @endforelse
    </div>
    {{ $news->links() }}
@endsection
