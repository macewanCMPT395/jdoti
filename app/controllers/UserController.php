<?php


/*The user controller is for the creation of new users
 *along with providing profiles of differnt users 
 * accessible at /user/{username} and /user    */
 
class UserController extends \BaseController {
	
	protected $user;
	
	public function __construct(User $user){
		$this->user = $user;
	}
	
	//Gives a list of all users in that
	public function index()
	{

		$user = $this->user->all();
		return View::make('user/index')->with('user', $user);
		
	}
	
	//Gives a profile page for any user given
	public function show($username)
	{
		
		$user = $this->user->whereUsername($username)->first();
		return View::make('user/show', ['user' => $user]);
		
	}
	
	//For Creating a view of new user form
	public function create()
	{
        if (Auth::check())
        {
            // Redirect to admin if allready logged in
			$currentuser = Auth::user()->username;
			$url = '/sessions/'.$currentuser.'/edit';
			return Redirect::to($url);
            return Redirect::to($url)->with('success', 'You are already logged in');
        }
		return View::make('user/create');
	}
	
	//Takes new user form and saves to database. 
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
		
		return Redirect::route('sessions.create')->with('info', 'User Created, Log in Now');
		
	}

};
