<!DOCTYPE html>
<html>
<head>
    <title>Weareimd.be - Notification Application</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('notifications') }}">Weareimd.be</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('notifications') }}">View All notifications</a></li>
        <li><a href="{{ URL::to('notifications/create') }}">Create a notification</a>
    </ul>
</nav>

<h1>Create a notification</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'notifications')) }}

    <div class="form-group">
        {{ Form::label('notification', 'Notification') }}
        {{ Form::text('notification', Input::old('notification'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('level', 'Importance Level') }}
        {{ Form::select('level', array('0' => 'Select a Level', '1' => 'Meh, can be done later', '2' => 'Check this out soon', '3' => 'DO THIS NOW!'), Input::old('level'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create notification', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>