@auth

    <form method="POST" action="{{ url()->current() }}/comment">
        @csrf
        <fieldset>
            <legend>Post a comment</legend>
            <p>
                <label for="body"></label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </p>
            <p>
                <button type="submit">Submit</button>            
            </p>
        </fieldset>
    </form>
    <br>

@else
 
    <hr>

@endauth

@foreach($post->comments()->latest()->get() as $comment)
    <a href="{{ url('/') }}/user/{{ $comment->user->name }}">{{ $comment->user->name }}</a> | 
    <a href="{{ url('/') }}/post/{{ $post->id }}">{{ $comment->created_at->diffForHumans() }}</a>
    <p>{{ $comment->body }}</p>
    <hr>
@endforeach