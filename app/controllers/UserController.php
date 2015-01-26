<?php

class UserController extends \BaseController {
	protected $user;
	
	public function __construct(User $user){
		$this->user = $user;
	}
	
	public function index()
	{

		$user = $this->user->all();
		return View::make('user/index')->with('user', $user);
		
	}
	
	public function show($username)
	{
		
		$user = $this->user->whereUsername($username)->first();
		return View::make('user/show', ['user' => $user]);
		
	}
	
	public function create()
	{
		return View::make('user/create');
	}
	
	public function store()
	{
		$input = Input::all();
		
		if( ! $user = $this->user->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->user->messages);
		}
		
		$this->user->hashPassword($input['password']);
		unset($this->user->password_confirmation);
		
		$this->user->save();

		//$user = new User;
		//$user->username = Input::get('username');
		//$user->password = Hash::make('password');
		//$user->firstname = Input::get('firstname');
		//$user->surname = Input::get('surname');
		//$user->email = Input::get('email');
		//$user->save();
		
		return Redirect::route('user.index');
		
	}
};
