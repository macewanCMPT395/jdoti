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
	
	//Function 
	public function show($username)
	{
		
		$user = $this->user->whereUsername($username)->first();
		return View::make('user/show', ['user' => $user]);
		
	}
	
	public function create()
	{
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('/admin')->with('success', 'You are already logged in');
        }

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
		
		return Redirect::route('sessions.create');
		
	}
};
