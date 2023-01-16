@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Admin page
    </h2>
    @include('admin.menu')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>CRUD Новости</h1>
                <div class="cards">
                    @forelse($news as $item)
                        @include('newPreview', ['new' => $item])
                        <form action="{{ route('admin.destroy', $item) }}" method="post">
                            <a href="{{ route('admin.edit', $item) }}" class="btn btn-success">
                                Edit
                            </a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    @empty
                        Нет новостей
                    @endforelse
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
