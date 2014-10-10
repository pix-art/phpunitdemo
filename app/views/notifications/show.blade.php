@extends('layouts.master')

@section('content')
<h1>Showing</h1>

    <div class="jumbotron text-center">
        <h2>{{ $notification->notification }}</h2>
        <p>
            <strong>Level:</strong> {{ $notification->level }}<br/>
            <strong>Added by:</strong> {{ $notification->user->email }}<br>
        </p>
    </div>
@stop