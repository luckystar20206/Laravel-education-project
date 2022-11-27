@extends('layouts.app')
@section('header')
    <h2 class="header-description">
        Admin Page - Add New
    </h2>
@endsection
@section('content')
    <div class="container-sm">
        <h1>Add New</h1>
        <form class="d-grid gap-4">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="small-desc">Short Description</label>
                <input type="text" class="form-control" id="small-desc" required>
            </div>
            <div class="form-group">
                <label for="img">Img Url</label>
                <input type="text" class="form-control" id="img" required>
            </div>
            <div class="form-group">
                <label for="desc">Full Description</label>
                <textarea class="form-control" id="desc" rows="6"></textarea>
            </div>
        </form>
    </div>
@endsection
