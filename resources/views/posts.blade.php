@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('main')
    <h1>Halaman Posts</h1>
    
    @foreach ($posts as $post)
    <article class="article">
        <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
        <h5>Author : <a href="/user/{{ $post->user->slug }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}">Read More</a>
    </article>
    @endforeach
@endsection