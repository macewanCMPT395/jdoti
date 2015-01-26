@extends('layouts.default')

@section('css')
	{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<h1>All Users</h1>
	
		@foreach($user as $user)
			<li>{{link_to("/user/{$user->username}", $user->username)}}</li>
		@endforeach
@stop
