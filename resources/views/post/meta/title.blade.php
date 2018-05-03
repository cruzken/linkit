<a href="

    @if($post->url)
        {{ $post->url }}
    @else
        {{ url('/') }}/post/{{ $post->id }}
    @endif

">
    {{ $post->title }}
</a>