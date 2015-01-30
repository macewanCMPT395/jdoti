@extends('layouts.default')

@section('css')
	{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<h1>Profile of {{$user->username}}</h1>
	<h1>Name: {{$user->firstname}}</h1>
	<h1>Send <a href="{{URL::to('/user/'.$user->username)}}"><img src={{asset('/images/prick.gif')}}  alt="Prick" style="width:80px;height:25px" ></a> to user?</h1>
	<h1>{{Session::get('message');}}</h1>
@stop
