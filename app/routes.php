<?php 

//For controlling creation of users
Route::resource('user', 'UserController');

//For controlling the home page routes
Route::get('/', 'HomeController@index');

//For giving /login a route to the session controller 
Route::get('login', 'SessionsController@create');

//For giving /logout a route to the session controller 
Route::get('logout', 'SessionsController@destroy');

//The admin page for sessions
Route::get('admin', 'SessionsController@admin')->before('auth');

//A controller for managing logins/ ect. 
Route::resource('sessions', 'SessionsController');
	




//Route::get('user', 'UserController@index');

//Route::get('user/{username}', 'UserController@show');

//Route::get('user/create', 'UserController@create');



//Route::get('/', function()
//{
////@extends('layout.default')
////
////@section('content')
////	<h1>All Users</h1>
////	hello
////@stop
	
	
	////$users = User::where('username', '!=', 'joshdoti')->get();
	////dd($users);
	
	////$user = new User;
	////$user->username = 'newuser3';
	////$user->password = Hash::make('password');
	////$user->save();
	
	////return user::all();
	
	////User::create([
		////'username' => 'user6',
		////'password' => Hash::make('12345')
	////]);
	
	////$user = User::find(2);
	////$user->username = 'updated';
	////$user->save();
	
	//return User::all();
	//$users = User::all();
	//dd($users);
//});

