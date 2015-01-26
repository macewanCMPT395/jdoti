
@extends('layouts.default')

@section('css')
	{{ HTML::style('css/style.css') }}
@stop
@section('css2')
	{{ HTML::style('css/styleFORM.css') }}
@stop

@section('content')
	<h1>Create New User</h1>
	
	<div class="info">
		<br>So you want to join Cactus? Good!
		<br>  All we need is some quick information
		<br>so we can find you in the future
		<br>
	</div>
	
	{{Form::open(['route' => 'user.store']) }}
		<div> 
			{{ Form::label('username', 'Username:  ') }}
			{{ Form::text('username')}}
			{{$errors->first('username');}}
	
		</div>
		
		<div>
			{{ Form::label('password', 'Password:   ') }}
			{{ Form::text('password')}}
			{{$errors->first('password');}}
	
		</div>
		
		<div>
			{{ Form::label('password_confirmation', 'Password Confirm:   ') }}
			{{ Form::text('password_confirmation')}}
			{{$errors->first('password_confirmation');}}
	
		</div>
		
		<div>
			{{ Form::label('firstname', 'First Name: ') }}
			{{ Form::text('firstname')}}
			{{$errors->first('firstname');}}
	
		</div>
		
		<div>
			{{ Form::label('surname', 'Surname:     ') }}
			{{ Form::text('surname')}}
			{{$errors->first('surname');}}
	
		</div>
		
		<div>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email')}}
			{{$errors->first('email');}}
		</div>
		
		<div>{{Form::submit('Create User') }}</div>
	{{ Form::close() }}
@stop
