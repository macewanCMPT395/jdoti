
@extends('layouts.default')

@section('css')
		{{ HTML::style('css/style.css') }}
@stop

@section('content')
	<div class="errors">{{Session::get('info');}}</div>
	<h1 class="center">Welcome To Cactus</h1>
	<div class = "info">What is Cactus?</div>
	<div class = "info3"><br>Cactus is a platform to connect with other people and send pricks to all your friends. </div>
	<div class = "info">What is a Prick?</div>
	<div class = "info3"><br>A prick is the Cactus way of saying hello to everyone out there.</div>
	<div class = "info">Why Cactus?</div>
	<div class = "info3"><br>Cactus is a revolution in the way humans 
	communicate, no more words or impossible to decipher sarcasm, just pricks, it's as easy as that. </div>

@stop
