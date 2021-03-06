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

        @yield('content')    
    </body>
</html>