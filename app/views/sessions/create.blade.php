
@extends('layouts.default')

{{--CSS for general style --}}
@section('css')
	{{ HTML::style('css/style.css') }}
@stop

{{--CSS2 for styling pages which include forms --}}
@section('css2')
	{{ HTML::style('css/styleFORM.css') }}
@stop

@section('content')

	<h1 class="center">Login!</h1>
	<div class="info">
		<br>Welcome back to Cactus!
		<br>All we need is some quick information
		<br>so we can find you in the system.
		<br>
	</div>
	
	{{Form::open(['route' => 'sessions.store']) }}
	<br>
		<div> 
			{{ Form::label('username', 'Username:  ') }}
			{{ Form::text('username')}}
		<div class="errors">{{Session::get('badInfo');}}</div>
	
		</div>
		
		<div>
			{{ Form::label('password', 'Password:   ') }}
			{{ Form::password('password')}}
	
		</div>
		
	<div>{{Form::submit('Login!') }}</div>
	
	{{ Form::close() }}

@stop
