@extends('layouts.default')

@section('css')
		{{ HTML::style('css/style.css') }}
@stop
@section('css2')
	{{ HTML::style('css/styleFORM.css') }}
@stop

@section('content')
	<h1 class="center">Edit Your Info!</h1>
	
	<div class="info2">
	
	{{Form::model($user, array('method' => 'PATCH', 'route' =>  array('sessions.update', $user->username)))}}
		<div>Your Username: <b> {{ $user['username'] }} </div>
		
		
		<div>
			{{ Form::label('password', 'Password:   ') }}
			{{ Form::password('password')}}
			<div class="errors">{{$errors->first('password');}}</div>
	
		</div>
		
		<div>
			{{ Form::label('password_confirmation', 'Password Confirm:   ') }}
			{{ Form::password('password_confirmation')}}
			<div class="errors">{{$errors->first('password_confirmation');}}</div>
		</div>
		<div class="errors">Only enter password fields if your changing your passsword!</div>
		
		<div>
			{{ Form::label('firstname', 'First Name: ') }}
			{{ Form::text('firstname')}}
			<div class="errors">{{$errors->first('firstname');}}</div>
	
		</div>
		
		<div>
			{{ Form::label('surname', 'Surname:     ') }}
			{{ Form::text('surname')}}
			<div class="errors">{{$errors->first('surname');}}</div>
	
		</div>
		
		<div>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email')}}
			<div class="errors">{{$errors->first('email');}}</div>
		</div>
		
		<div>{{Form::submit('Update user Info') }}</div>
		<div class="errors">{{Session::get('info');}}</div>
	{{ Form::close() }}
	</div>
@stop
@stop
