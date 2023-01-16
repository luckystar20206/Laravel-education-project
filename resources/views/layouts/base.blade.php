<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
<div class="wrapper">
    <header>
        @section('header')
        @show
    </header>
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Homepage</a></li>
            <li><a href="{{route('info')}}">Project info</a></li>
            <li><a href="{{route('news.index')}}">News</a></li>
            <li><a href="{{route('news.categories')}}">Categories</a></li>
        </ul>
    </nav>
    @section('content')
    @show
</div>
</body>
</html>
