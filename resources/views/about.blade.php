@extends('layouts.main')

@section('css-link')
    <link rel="stylesheet" href="css/about.css">
@endsection

@section('main')
    <table class="table table-borderless">
        <tr>
            <td><h5>Name</h5></td>
            <td><h5>{{ $user->name }}</h5></td>
        </tr>
        <tr>
            <td><h5>e-Mail</h5></td>
            <td><h5>{{ $user->email }}</h5></td>
        </tr>
        <tr>
            <td><h5>Key</h5></td>
            <td><h5>{{ $user->password }}</h5></td>
        </tr>
    </table>
@endsection