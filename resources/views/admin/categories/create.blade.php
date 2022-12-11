@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Admin Page - Add category
    </h2>
@endsection
@section('content')
    <div class="container-sm">
        <h1>@if ($categories->id) Edit Category @else Create Category @endif</h1>
        <form action="@if (!$categories->id){{ route('admin.categories.create') }}@else{{ route('admin.categories.update', $categories) }}@endif" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    name="title" type="text" class="form-control"
                    id="title" placeholder="Enter title here"
                    value="{{ $categories->title ?? old('title') }}"
                    required
                >
            </div>
            <div class="form-group">
                <label for="title">Slug</label>
                <input
                    name="slug" type="text" class="form-control"
                    id="slug" placeholder="Enter slug here"
                    value="{{ $categories->slug ?? old('slug') }}"
                    required
                >
            </div>
            <button type="submit" class="btn btn-primary mt-2">
                @if ($categories->id) Edit @else Create @endif
            </button>
        </form>
    </div>
@endsection
