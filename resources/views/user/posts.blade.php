@extends('layouts.master')

@section('content')

<br>
    <h1>Posts from {{ $user->name }}</h1>
    @foreach($posts as $post)
        @include('home.post')
    @endforeach

@endsection
