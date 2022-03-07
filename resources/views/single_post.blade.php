@extends('layouts.main')

@section('main')

    <article class="article">
        <h3>{{ $post->title }}</h3>
        <h5>Author :  <a href="/user/{{ $post->user->slug }}"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{!! $post->body !!}</p>
    </article>

    <a href="/posts" class="btn btn-primary">Kembali ke daftar posts</a>
@endsection