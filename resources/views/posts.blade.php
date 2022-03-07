@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('main')
    <h1>Halaman Posts</h1>
    
    @foreach ($posts as $post)
    <article>
        <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
        <h5>Author : {{ $post->author }}</h5>
        <p> {!! $post->body !!} </p>
    </article>
    @endforeach
@endsection