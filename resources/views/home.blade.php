@extends('layouts.master')

@section('content')
    <h1>This is Linkit</h1>
    <h4>Post links to interesting content and discuss them</h4>
    <hr>

    @foreach($posts as $post)
        <strong><a href="

            @if($post->url)
                {{ $post->url }}
            @else
                posts/{{ $post->id }}
            @endif

            ">{{ $post->title }}</a></strong>
        <p>{{ $post->user->name }} | <a href="posts/{{ $post->id }}">{{ $post->created_at->diffForHumans() }}</a> | <a href="posts/{{ $post->id }}">{{ $post->comments->count() }} comments</a></p>
        <hr>
    @endforeach

@endsection
