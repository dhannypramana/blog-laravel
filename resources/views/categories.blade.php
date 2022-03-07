@extends('layouts.main')

@section('main')
    @foreach ($categories as $category)
        <a href="/categories/{{ $category->slug }}" class="btn btn-primary">{{ $category->name }}</a>
    @endforeach
@endsection