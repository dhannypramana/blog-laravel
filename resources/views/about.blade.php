@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/about.css">
@endsection

@section('main')
    <h1>Ini Halaman About</h1>
    <h3>{{ $user[0]->name }}</h3>
    <h5>{{ $user[0]->email }}</h5>
    <h5>{{ $user[0]->password }}</h5>
@endsection