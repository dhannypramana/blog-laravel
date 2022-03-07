@extends('layouts.main')

@section('main')

    <article>
        <h3>{{ $post->title }}</h3>
        <h5>Author : {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{!! $post->body !!}</p>
    </article>

    <a href="/posts">Kembali ke daftar posts</a>
@endsection