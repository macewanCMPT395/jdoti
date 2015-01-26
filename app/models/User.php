<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	
	//public $timestamps = false;
	
	protected $fillable = ['username', 'password', 'password_confirmation', 'firstname', 'surname', 'email'];
	
	public static $rules = 	[
		'username'=> 'required | unique:users',
		'password'=> 'required | min:5 | confirmed',
		'password_confirmation' => 'required| min:5',
		'firstname'=> 'required',
		'surname'=> 'required',
		'email'=> 'required | email | unique:users'
		];
		
	public $messages;
	

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	 
	protected $hidden = array('password', 'remember_token');

	public function isValid()
	{
		$validation = Validator::make($this->attributes, static::$rules);
		
		if ($validation->passes()) return true;
			
		
		$this->messages = $validation->messages();
		
		return false;
	}
	
	public function hashPassword($value){
		
		$this->attributes['password'] = Hash::make($value);
		
	}
	
}
