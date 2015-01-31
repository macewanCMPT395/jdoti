@extends('layouts.default')

@section('css')
		{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<div class="errors">{{Session::get('info');}}</div>
	
	@if(Auth::check())
	<div class="errors">{{Session::get('info');}}</div>
	<h1 class="center">Welcome To Cactus {{Auth::user()->username}}</h1>
	

	<div class = "info">Welcome Back to Cactus {{Auth::user()->username}}. Where you can send a 
	<img src={{asset('/images/prick.gif')}}  alt="Prick"> to all your friends 
	and keep up to date on the latest news coming down the cactus. </div>
	
		<a href="{{URL::to('/user')}}">
		<h2 class="center">Find Other Users to <img src={{asset('/images/prick.gif')}}  alt="Prick"> </h2>
		</a>
		
		<a href="{{URL::to('/admin')}}">
		<h2 class="center">Edit Your Information</h2>
		</a>
	@else

	<h1 class="center">Welcome To Cactus</h1>
	
	<div class = "info">Welcome to Cactus. Where you can send a 
	<img src={{asset('/images/prick.gif')}}  alt="Prick"> to all your friends 
	and keep up to date on the latest news coming down the cactus. </div>
	<a href="{{URL::to('/user/create')}}">
	<h2 class="center">New to Cactus? Join Today</h2>
	</a>
		
	<a href="{{URL::to('/login')}}">
	<h2 class="center">Existing User? Log in Here</h2>
	</a>
	@endif
	
@stop

