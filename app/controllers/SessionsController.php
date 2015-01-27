<?php

class SessionsController extends \BaseController {
	
	//
	public function create()
	{
		//Checking if loged in, gives admin page if true
		if(Auth::check())return Redirect::to('/admin');
		
		//Give login page otherwise
		return View::make('sessions.create');
		
	}
	
	//Checks credentials inputed on /login or /sessions/create page
	public function store(){
		
		if(Auth::attempt(Input::only('username' , 'password')))
		{
			return Redirect::to('/admin');
		}
		return Redirect::back()->withInput()->with('badInfo', 'Plese Cheack Login Info');
	}
	
	//logs out and returns to login page
	public function destroy()
	{
		Auth::logout();
		
		return Redirect::route('sessions.create');
		
		
	}
	
	
}
