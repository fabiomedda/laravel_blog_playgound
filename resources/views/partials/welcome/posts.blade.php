<div class="posts">
    @if($posts ?? '')
    @foreach($posts ?? '' as $post)
        @if($loop->first)
        <h4>Primo post scritto</h4>
        @elseif ($loop->last)
        <h4>My last post</h4>
        @endif
        <h3>{{ $post['title'] }}</h3>
        <p>{{ $post['description'] }}</p>

    @endforeach
    @else
        <p>Sorry nothing to see!</p>
    @endif
</div>