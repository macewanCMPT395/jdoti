<?php

class HomeController extends BaseController {


	// EXAMPLE: Route::get('/', 'HomeController@showWelcome');

	public function index()
	{
		return View::make('hello');
	}

}
