@extends('layouts.master')

@section('content')

<br>

    @foreach($posts as $post)
        @include('home.post')
    @endforeach

@endsection
