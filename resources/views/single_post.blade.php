@extends('layouts.main')

@section('main')

    <article>
        <h3>{{ $post->title }}</h3>
        <h5>Author : {{ $post->author }}</h5>
        <p>{!! $post->body !!}</p>
    </article>

    <a href="/posts">Kembali ke daftar posts</a>
@endsection