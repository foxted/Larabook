@extends('layouts.default')

@section('content')
    <h1>Register!</h1>

    {{ Form::open(['route' => 'register_path']) }}

        <div class="form-group">
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password Confirmation:') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}
@stop