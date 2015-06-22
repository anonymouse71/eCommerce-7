<?php

class UsersController extends BaseController {
    

    public function __construct() 
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

	/**
	 * GET /users/signup
	 *
	 * @return Response
	 */
	public function getSignup()
	{
		return View::make('users.signup');
	}

	/**
	 * POST /users/signup
	 *
	 * @return Response
	 */
	public function postSignup()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email'); 
			$user->password = Hash::make(Input::get('password'));
			$user->telephone = Input::get('telephone');
			$user->save();

			return Redirect::to('users/login')
			   ->with('message', 'Thank you for creating a new account. Please login!');
		}

		return Redirect::to('users/signup')
		  ->with('message', 'Please correct the errors below!')
		  ->withErrors($validator->messages())
		  ->withInput();
	}

	/**
	 * GET /users/login
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('users.login');
	}

	/**
	 * POST /users/login
	 *
	 * @return Response
	 */
	public function postLogin()
	{

		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		$remember = Input::get('remember-me');

		if (Auth::attempt($credentials, $remember)) {

			return Redirect::to('/')
			  ->with('message', 'Welcome back!');
		}

		return Redirect::to('users/login')
		  ->with('message', 'Your email/password combo was incorrect!');
	}

	/**
	 * GET /users/logout
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('users/login')
		   ->with('message', 'You have been signed out!');
	}

}