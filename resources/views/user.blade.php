@extends('layouts.main')

@section('main')
    <h2>Post Author : {{ $posts[0]->user->name }}</h2>
    @foreach ($posts as $post)
        <article class="article">
            <h3><a href="/blog/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <h5>Author : <a href="/blog/authors/{{ $post->user->slug }}">{{ $post->user->name }}</a> in <a href="/blog/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/posts/{{ $post->slug }}">Read More</a>
        </article>
    @endforeach
@endsection