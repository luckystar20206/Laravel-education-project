@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Admin Page - Add New
    </h2>
@endsection
@section('content')
    <div class="container-sm">
        <h1>@if ($news->id) Edit New @else Create New @endif</h1>
        <form action="@if (!$news->id){{ route('admin.create') }}@else{{ route('admin.update', $news) }}@endif" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    name="title" type="text" class="form-control"
                    id="title" placeholder="Enter title here"
                    value="{{ $news->title ?? old('title') }}"
                    required
                >
            </div>
            <div class="form-group">
                <label for="newsCategory">Категория новости</label>
                <select name="category_id" id="newsCategory" class="form-control">
                    @forelse($categories as $item)
                        <option @if ($item['id'] == $news->category_id || $item['id'] == old('category_id')) selected
                                @endif value="{{ $item['id'] }}">{{ $item['title'] }}</option>
                    @empty
                        <option value="0" selected>Нет категории</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="small-desc">Short Description</label>
                <input
                    name="description" type="text"
                    class="form-control" id="small-desc"
                    placeholder="Enter short description here"
                    value="{{$news->description ?? old('description')}}"
                    required
                >
            </div>
            <div class="form-group mt-2">
                <label for="img">Img Url</label>
                <input
                    name="image-url" type="text"
                    class="form-control" id="img"
                    placeholder="Enter url link here"
                    value="{{$news->{'image-url'} ?? old('image-url')}}"
                    required
                >
            </div>
            <div class="form-group mt-2">
                <label for="desc">Full Description</label>
                <textarea class="form-control" name="text" id="desc" rows="6">
                    {{$news->text ?? old('text')}}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">
                @if ($news->id) Edit @else Create @endif
            </button>
        </form>
    </div>
@endsection
