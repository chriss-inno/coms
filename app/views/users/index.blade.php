@extends('main.master')
@section('title')
    User main page
@stop

@section('contents')

<p> These are the available users </p>
 @include('users.list')
@stop
