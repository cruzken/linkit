@extends('layouts.master')

@section('content')

@foreach($comments as $comment)
    <a href="{{ url('/') }}/user/{{ $comment->user->name }}">{{ $comment->user->name }}</a> | 
    <a href="{{ url('/') }}/post/{{ $comment->post->id }}">{{ $comment->created_at->diffForHumans() }}</a>
    <p>{{ $comment->body }}</p>
    <hr>
@endforeach

@endsection
