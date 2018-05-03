@extends('layouts.master')

@section('content')
    <h1>
        @include('post.meta.title')
    </h1>

    @include('post.meta.meta')

    @if($post->body)
        <p>
            {{ $post->body }}
        </p>
    @endif

    @include('post.comments')

@endsection
