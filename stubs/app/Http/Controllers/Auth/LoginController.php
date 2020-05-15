<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = RouteServiceProvider::HOME;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	/**
	 * Show the application's login form.
	 *
	 * @return \Illuminate\View\View
	 */
	public function showLoginForm()
	{
		return view('admin.login');
	}

	/**
	 * The user has been authenticated.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  mixed  $user
	 * @return mixed
	 */
	protected function redirectTo()
	{
		toast(__('Welcome back, :name', ['name' => auth()->user()->name]), 'success');

		return $this->redirectTo;
	}

	/**
	 * The user has logged out of the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return mixed
	 */
	protected function loggedOut(Request $request)
	{
		toast(__('You have successfully logged out!'), 'success');
	}
}
