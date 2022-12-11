@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Admin page Categories
    </h2>
    @include('admin.menu')
@endsection
@section('content')
    <div class="container">
        <h1>CRUD Категорий</h1>
        <div class="cards">
            @forelse($categories as $item)
                @if ($item)
                    <form class="card mb-4" method="post"
                          action="{{ route('admin.categories.destroy', $item) }}"
                    >
                        <div class="card-body text-start">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text">{{$item->slug}}</p>
                            <div class="flex-row justify-content-between">
                                <a href="{{ route('admin.categories.edit', $item) }}" class="btn btn-success">
                                    Edit
                                </a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </div>
                    </form>
                @endif
            @empty
                Нет категорий
            @endforelse
        </div>
    </div>
@endsection
