@extends('layouts.default')

@section('content')
    <h1>Need to reset your password?</h1>

    <div class="row">
        <div class="col-md-6">
            {{ Form::open() }}
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Reset Password', ['class' => 'btn btn-primary form-control']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop