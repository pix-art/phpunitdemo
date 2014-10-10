@extends('layouts.master')

@section('content')
<h1>Edit</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($notification, array('route' => array('notifications.update', $notification->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('notification', 'Notification') }}
        {{ Form::text('notification', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('level', 'Importance Level') }}
        {{ Form::select('level', array('0' => 'Select a Level', '1' => 'Just a regular notification', '2' => 'Check this out!', '3' => 'CHECK THIS NOW!'), Input::old('level'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit notification!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop