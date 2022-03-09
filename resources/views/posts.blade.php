@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('main')
    @if ($posts->count())
        <div class="card mb-3">
            <img class="card-img-top" src="https:/source.unsplash.com/1200x400/?computer" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title text-dark"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p class="card-text text-center">
                    <small class="text-muted">
                        By. <a href="/authors/{{ $posts[0]->user->slug }}">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>
            </div>
        </div>

    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https:/source.unsplash.com/800x300/?technology" alt="Card image cap">
                    <div class="card-body">
                        <h4><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
                        <p class="card-text">
                            <small class="text-muted">
                                <p>By. <a href="/authors/{{ $post->user->slug }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                            </small>
                            <p class="fs-6">{{ $post->excerpt }}</p>
                        </p>
                        <a class="btn btn-primary btn-sm" href="/posts/{{ $post->slug }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection