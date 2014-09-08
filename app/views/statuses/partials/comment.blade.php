<article class="comments__comment media comment-media">
    <div class="pull-left">
        @include('users.partials.avatar', ['user' => $comment->owner, 'class' => 'status-media-object', 'size' => 30 ])
    </div>
    <div class="media-body comment-media-body">
        <h4 class="media-heading comment-media-heading">{{ $comment->owner->username }}</h4>
        {{ $comment->body }}
    </div>
</article>