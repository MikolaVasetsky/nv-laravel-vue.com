<?php

namespace App\Http\Controllers;

use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function register()
	{
		// validate
		$this->validate(request(),[
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6'
		]);

		// create db
		$user = User::create(request()->all());

		// response
		return ['message' => 'User Created', 'user' => $user];
	}

	public function login()
	{
		// validate
		$this->validate(request(),[
			'email' => 'required|email',
			'password' => 'required|min:6'
		]);

		$crediential = request()->only('email', 'password');

		if ( !$token = JWTAuth::attempt($crediential) ) {
			return 'Not Authenticated';
		}

		return ['token' => $token];
	}
}
