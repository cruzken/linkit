@extends('layouts.master')

@section('content')
    <h1>This is Linkit</h1>
    <h4>Post links to interesting content and discuss them</h4>
    <hr>

    @foreach($posts as $post)
        @include('home.post')
    @endforeach
    
    @if(! ($posts->currentPage() == 1) )
    <a href="{{ $posts->previousPageUrl() }}">Prev</a>
    @endif
    
    @if( $posts->currentPage() != $posts->lastPage())
    <a href="{{ $posts->nextPageUrl() }}">Next</a>
    @endif

@endsection
