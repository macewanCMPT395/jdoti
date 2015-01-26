@extends('layouts.default')

@section('css')
	{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<h1>Hello, {{$user->username}}</h1>

@stop
