@extends('layouts.master')

@section('content')
<h1>
    <a href="{{ url('/') }}/user/{{ $user->name }}">{{ $user->name }}</a>
</h1>

<strong>User for {{ $user->created_at->diffForHumans(null, true) }} </strong>
<br>
<a href="{{ url('/') }}/user/{{ $user->name }}/posts">submissions</a>
<a href="{{ url('/') }}/user/{{ $user->name }}/comments">comments</a>
@endsection