@extends('layouts.default')

@section('css')
	{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<h1>Profile of {{$user->username}}</h1>

@stop
