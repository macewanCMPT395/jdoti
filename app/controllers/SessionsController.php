<?php


//Controls the logging in and logging out of website along
//with some redirects for certain website calls(admin)
//Also controls the editing of user information once logged in
class SessionsController extends \BaseController {
		
	protected $user;
	
	public function __construct(User $user){
		$this->user = $user;
	}
	
	
	//Redirects all /admin calls to an 
	//editing session for logged in user to make access easier for user
	public function admin()
	{
		
		$currentuser = Auth::user()->username;
		$url = '/sessions/'.$currentuser.'/edit';
		return Redirect::to($url);
	}
	
	//Brings in the editing form view
	public function edit($id)
	{
		if(Auth::user()->username != $id){
			return Redirect::to('/');
		}
		
		$user = Auth::user();
		return View::make('sessions.edit')->with('user', $user);
	}
	
	
	//Gives a login page to user
	//If logged in redirects to admin page. 
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
	
	public function update($id)
	{
		$user = new User;
		$user = Input::all();
		if ( ! $user->isValid(Input::all())){
			return Redirect::back()->withInput()->withErrors($this->user->messages);
		}
				
		$user->touch(Input::all());
		return Redirect::route('admin');

	}
	

	
}
