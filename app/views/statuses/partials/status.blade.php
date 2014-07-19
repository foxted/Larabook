<article class="media status-media">
    <div class="pull-left">
        <img class="media-object" src="{{ $status->user->present()->gravatar }}" alt="{{ $status->user->username }}">
    </div>
    <div class="media-body">
        <h4 class="media-heading">{{ $status->user->username }}</h4>

        <p>{{ $status->present()->timeSincePublished() }}</p>
        {{ $status->body }}
    </div>
</article>