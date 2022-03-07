@extends('layouts.main')

@section('main')
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <h5>Author : {{ $post->author }} in {{ $post->category->name }}</h5>
        <p>{!! $post->body !!}</p>
    @endforeach
@endsection