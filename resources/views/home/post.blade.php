<strong>

    <a href="

        @if($post->url)
            {{ $post->url }}
        @else
            post/{{ $post->id }}
        @endif

    ">
        {{ $post->title }}
    </a>

</strong>

<p>
    <a href="user/{{ $post->user->name }}">{{ $post->user->name }}</a> | 
    <a href="post/{{ $post->id }}">{{ $post->created_at->diffForHumans() }}</a> | 
    <a href="post/{{ $post->id }}">{{ $post->comments->count() }} comments</a>
</p>

<hr>