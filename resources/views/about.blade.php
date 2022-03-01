@extends('layouts.main')

@section('css-link')
    {{-- link css file here --}}
@endsection

@section('container')
    <h1 class="mb-3">Halaman About</h1>

    <h4>{{ $name }}</h4>
    <h4>{{ $email }}</h4>
    <img src="img/{{ $image }}" alt="{{ $image }}" class="img-thumbnail rounded-circle">
@endsection