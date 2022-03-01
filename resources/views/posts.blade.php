@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('container')
    <h1>Halaman Posts</h1>
    
    @foreach ($blog_posts as $post)
    <article>
        <h2><a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
        <h5>Author : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
@endsection