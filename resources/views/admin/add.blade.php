@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Admin Page - Add New
    </h2>
@endsection
@section('content')
    <div class="container-sm">
        <h1>Add New</h1>
        <form action="{{route('admin.add')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title here" value="{{old('title')}}" required>
            </div>
            <div class="form-group">
                <label for="newsCategory">Категория новости</label>
                <select name="category" id="newsCategory" class="form-control">
                    @forelse($categories as $item)
                        <option @if ($item['id'] == old('category')) selected
                                @endif value="{{ $item['id'] }}">{{ $item['title'] }}</option>
                    @empty
                        <option value="0" selected>Нет категории</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="small-desc">Short Description</label>
                <input name="small-desc" type="text" class="form-control" id="small-desc" placeholder="Enter short description here" value="{{old('small-desc')}}" required>
            </div>
            <div class="form-group mt-2">
                <label for="img">Img Url</label>
                <input name="img" type="text" class="form-control" id="img" placeholder="Enter url link here" value="{{old('img')}}" required>
            </div>
            <div class="form-group mt-2">
                <label for="desc">Full Description</label>
                <textarea name="desc" class="form-control" id="desc" rows="6">{{old('desc')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add New</button>
        </form>
    </div>
@endsection
