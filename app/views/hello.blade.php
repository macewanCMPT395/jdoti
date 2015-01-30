@extends('layouts.default')

@section('css')
		{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<div class="errors">{{Session::get('info');}}</div>
	<h1 class="center">Welcome To Cactus</h1>
	

	<div class = "info">Welcome to Cactus. Where you can get send a 
	<img src={{asset('/images/prick.gif')}}  alt="Prick"> to all your friends 
	and keep up to date on the latest news coming down the cactus. </div>
	
	<a href="{{URL::to('/user/create')}}">
	<h2 class="center">New to Cactus? Join Today</h2>
	</a>
	
	<a href="{{URL::to('/login')}}">
	<h2 class="center">Existing User? Log in Here</h2>
	</a>
	
	
@stop

