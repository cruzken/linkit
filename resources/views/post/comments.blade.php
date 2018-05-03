<strong>Comments:</strong>
<hr>

@foreach($post->comments()->latest()->get() as $comment)
    <a href="{{ url('/') }}/user/{{ $comment->user->name }}">{{ $comment->user->name }}</a> | 
    <a href="{{ url('/') }}/post/{{ $post->id }}">{{ $comment->created_at->diffForHumans() }}</a>
    <p>{{ $comment->body }}</p>
    <hr>
@endforeach