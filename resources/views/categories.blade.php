@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/categories.css">
@endsection

@section('main')
    <h1>Post Category</h1>
    <ul class="category">
        @foreach ($categories as $category)
        <li>
            <a href="/blog/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>
@endsection