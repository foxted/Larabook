<a href="{{ route('profile_path', $user->username) }}">
    <img class="media-object status-media-object img-squared avatar" src="{{ $user->present()->gravatar(isset($size) ? $size : 45) }}" alt="{{ $user->username }}">
</a>