<?php

class HomeController extends BaseController {


	//Give the Home Page
	public function index()
	{
		//Checking if loged in, can gives differnt page if true
		if(Auth::check())
		{
			return View::make('hello');
			//$currentuser = Auth::user()->username;
			//$url = '/sessions/'.$currentuser.'/edit';
			//return Redirect::to($url);
		}
		
		return View::make('hello');
		
	}
	
	//Give the About Page
	public function about()
	{
		return View::make('about');
	}

}
