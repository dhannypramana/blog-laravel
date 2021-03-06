@extends('layouts.main')

@section('main')
    <h2 class="mb-3">Post Category : {{ $posts[0]->category->name }}</h1>

    @foreach ($posts as $post)
        <article class="mb-3 article">
            <h2><a href="/blog/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <h5>Author : <a href="/blog/authors/{{ $post->user->slug }}">{{ $post->user->name }}</a> in 
                <a href="/blog/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            <p>{!! $post->excerpt !!}</p>
            <a href="/blog/posts/{{ $post->slug }}">Read More</a>
        </article>
    @endforeach

@endsection