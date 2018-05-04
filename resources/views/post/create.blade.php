@extends('layouts.master')

@section('content')
<form method="POST" action="{{ url('/') }}/post">
    @csrf
    <fieldset>
        <legend>Submit a link or post</legend>
        <p>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </p>
        <p>
            <label for="url">Url</label>
            <input type="text" id="url" name="url">
        </p>
        <p>
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="10" rows="4"></textarea>
        </p>
        <p>
            <button type="submit">Submit</button>            
        </p>
    </fieldset>
</form>
@endsection