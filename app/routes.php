<?php 

//For controlling creation of users
Route::resource('user', 'UserController');

//For controlling the home page routes
Route::get('/', 'HomeController@index');

//For giving /login a route to the session controller 
Route::get('login', 'SessionsController@create');

//For giving /logout a route to the session controller 
Route::get('logout', 'SessionsController@destroy');

//The admin page for sessions, redirects to sessions/{user}/edit
Route::get('admin', 'SessionsController@admin')->before('auth');

//A controller for managing logins/ ect. 
Route::resource('sessions', 'SessionsController');

