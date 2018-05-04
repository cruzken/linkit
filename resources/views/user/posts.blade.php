@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
        @include('home.post')
    @endforeach

@endsection
