@extends('layouts.default')

@section('css')
		{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<h1 class="center">Welcome To Cactus</h1>
	
	<a href="{{URL::to('/user/create')}}">
	<h2 class="center">New to Cactus? Join Today</h2>
	</a>
	
	<a href="{{URL::to('/login')}}">
	<h2 class="center">Existing User? Log in Here</h2>
	</a>
	
	
@stop

