@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="media">
                <div class="pull-left">@include('users.partials.avatar', ['size' => 50])</div>
                <div class="media-body">
                    <h1 class="media-heading">{{ $user->username }}</h1>
                    <ul class="list-inline text-muted">
                        <li>{{ $user->present()->statusCount() }}</li>
                        <li>{{ $user->present()->followerCount() }}</li>
                    </ul>
                    <ul class="list-unstyled list-inline">
                    @foreach($user->followers as $follower)
                        <li>@include ('users.partials.avatar', ['size' => 25, 'user' => $follower])</li>
                    @endforeach
                    </ul>
                </div>
            </div>


        </div>

        <div class="col-md-6">
            @unless ($user->is($currentUser))
                @include('users.partials.follow-form')
            @endif

            @if($user->is($currentUser))
                @include('statuses.partials.publish-status-form')
            @endif

            @include('statuses.partials.statuses', ['statuses' => $user->statuses])
        </div>
    </div>
@stop