<p>
    <a href="{{ url('/') }}/user/{{ $post->user->name }}">{{ $post->user->name }}</a> | 
    <a href="{{ url('/') }}/post/{{ $post->id }}">{{ $post->created_at->diffForHumans() }}</a> | 
    <a href="{{ url('/') }}/post/{{ $post->id }}">{{ $post->comments->count() }} comments</a>
</p>