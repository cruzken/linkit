@extends('layouts.master')

@section('content')
    <h1>This is Linkit</h1>
    <h4>Post links to interesting content and discuss them</h4>
    <hr>

    @foreach($posts as $post)
        @include('home.post')
    @endforeach

@endsection
