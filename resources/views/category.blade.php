@extends('layouts.main')

@section('main')
    <h2 class="mb-3">Post Category : {{ $posts[0]->category->name }}</h1>

    @foreach ($posts as $post)
        <article style="border: 1px solid black; padding: 20px;" class="mb-3">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <h5>Author : {{ $post->user->name }} in  <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            <p>{!! $post->excerpt !!}</p>
            <a href="/posts/{{ $post->slug }}">Read More</a>
        </article>
    @endforeach

@endsection