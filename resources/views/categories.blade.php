@extends('layouts.main')

@section('main')
    <ul>
        @foreach ($categories as $category)
        <li>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </li>    
        @endforeach
    </ul>
@endsection