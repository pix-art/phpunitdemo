@extends('layouts.master')

@section('content')
<h1>All the notifications</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-bordered">
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
        <tr class="@if ($value->level == 2) warning @elseif ($value->level == 3) danger @endif">
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

@stop