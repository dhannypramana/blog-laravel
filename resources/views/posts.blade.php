@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/posts.css">
@endsection

@section('main')
    @if ($posts->count())
        <div class="card mb-3">
            <img class="card-img-top" src="https:/source.unsplash.com/1200x400/?computer" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title text-dark"><a href="/blog/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p class="card-text text-center">
                    <small class="text-muted">
                        By. <a href="/blog/authors/{{ $posts[0]->user->slug }}">{{ $posts[0]->user->name }}</a> in <a href="/blog/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="btn btn-primary" href="/blog/posts/{{ $posts[0]->slug }}">Read More</a>
            </div>
        </div>

    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="container-fluid">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 20rem;">
                    <a href="/blog/categories/{{ $post->category->slug }}">
                        <div class="position-absolute bg-dark px-4 py-2 text-white fs-6" style="background-color: rgba(0, 0, 0, 0.8)">{{ $post->category->name }}</div>
                    </a>
                    <img class="card-img-top" src="https:/source.unsplash.com/800x400/?technology" alt="Card image cap">
                    <div class="card-body">
                        <h4><a href="/blog/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
                        <p class="card-text">
                            <small class="text-muted">
                                <p>By. <a href="/blog/authors/{{ $post->user->slug }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                            </small>
                            <p class="fs-6">{{ $post->excerpt }}</p>
                        </p>
                        <a class="btn btn-primary btn-sm" href="/blog/posts/{{ $post->slug }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection