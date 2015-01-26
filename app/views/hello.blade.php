@extends('layouts.default')

@section('css')
		{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<h1>Welcome To Cactus</h1>
	
	<a href="{{URL::to('/user/create')}}">
	<h2>New to Cactus? Join Today</h2>
	</a>
	
	<a href="{{URL::to('/user')}}">
	<h2>Existing User? Log in Here</h2>
	</a>
	
	
@stop
