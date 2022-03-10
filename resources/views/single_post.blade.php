@extends('layouts.main')

@section('main')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                    <div class="card mb-3">
                        <div class="card-body p-4">
                            <h3 class="card-title text-dark"><a href="/blog/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
                            <p class="card-text">
                                <small class="text-muted">
                                    By. <a href="/blog/authors/{{ $post->user->slug }}">{{ $post->user->name }}</a> in <a href="/blog/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <img class="card-img-top img-fluid" src="https:/source.unsplash.com/1200x400/?computer" alt="Card image cap">
                            <p class="card-text text-justify p-2s">{!! $post->body !!}</p>
                            </div>
                        </div>

                    <a href="/blog/posts" class="btn btn-primary mb-5">Kembali ke daftar posts</a>
            </div>
        </div>
    </div>
@endsection