@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $blog_posts->title }}</a></h2>
        <h5>Author : {{ $blog_posts->author }}</h5>
        {!! $blog_posts->body !!}
    </article>
    <a class="btn btn-primary" href="/posts">Kembali ke Daftar Posts</a>
@endsection