<?php

class HomeController extends BaseController {


	// EXAMPLE: Route::get('/', 'HomeController@showWelcome');

	public function index()
	{
		//Checking if loged in, gives admin page if true
		if(Auth::check())
		{
			return View::make('hello');
			//$currentuser = Auth::user()->username;
			//$url = '/sessions/'.$currentuser.'/edit';
			//return Redirect::to($url);
		}
		
		return View::make('hello');
		
	}

}
