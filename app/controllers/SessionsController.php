<?php

class SessionsController extends \BaseController {
	
	//
	public function admin()
	{
		
		$currentuser = Auth::user()->username;
		$url = '/sessions/'.$currentuser.'/edit';
		return Redirect::to($url);
	}
	
	
	public function edit($id)
	{
		if(Auth::user()->username != $id){
			return Redirect::to('/');
		}
		
		$user = User::find($id);
		return View::make('sessions.edit',  ['user' => $user]);
	}
	
	
	
	public function create()
	{
		//Checking if loged in, gives admin page if true
		if(Auth::check())
		{
			$currentuser = Auth::user()->username;
			$url = '/sessions/'.$currentuser.'/edit';
			return Redirect::to($url);
		}
		
		//Give login page otherwise
		return View::make('sessions.create');
		
	}
	
	//Checks credentials inputed on /login or /sessions/create page
	public function store(){
		
		if(Auth::attempt(Input::only('username' , 'password')))
		{
			$currentuser = Auth::user()->username;
			$url = '/sessions/'.$currentuser.'/edit';
			return Redirect::to($url);
		}
		return Redirect::back()->withInput()->with('badInfo', 'Either Username or Password is Wrong, Please try again.');
	}
	
	//logs out and returns to login page
	public function destroy()
	{
		Auth::logout();
		
		return Redirect::route('sessions.create');
		
		
	}
	

	
}
