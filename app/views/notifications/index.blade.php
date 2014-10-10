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

<h1>All the notifications</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Notification</td>
            <td>Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($notifications as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->notification }}</td>
            <td>{{ $value->level }}</td>

            <td>
                <div class="btn-toolbar margin-bottom-15" role="toolbar"> 
                    <div class="btn-group">
                        <a class="btn btn-small btn-success pull-right" href="{{ URL::to('notifications/' . $value->id) }}">Show</a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-small btn-warning pull-right" href="{{ URL::to('notifications/' . $value->id . '/edit') }}">Edit</a>
                    </div>   
                    <div class="btn-group">    
                        {{ Form::open(array('url' => 'notifications/' . $value->id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>