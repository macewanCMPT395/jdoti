<?php 


Route::resource('user', 'UserController');

Route::get('/', 'HomeController@index');

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

