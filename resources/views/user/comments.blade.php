@extends('layouts.master')

@section('content')

<br>
<h1>Comments from {{ $user->name }}</h1>

@foreach($comments as $comment)

<blockquote>
    <p>
        <a href="{{ url('/') }}/post/{{ $comment->post->id }}">{{ $comment->post->title }}</a> |
        <a href="{{ url('/') }}/user/{{ $comment->user->name }}">{{ $comment->user->name }}</a> | 
        <a href="{{ url('/') }}/post/{{ $comment->post->id }}">{{ $comment->created_at->diffForHumans() }}</a>
        <br>
        {{ $comment->body }}
    </p>
</blockquote>
@endforeach



@endsection
