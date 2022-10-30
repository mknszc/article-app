<?php

namespace App\Repositories;

use App\Models\User;

class UserRepositories
{
	public function getByEmail(string $email)
	{
		return User::where('email', $email)->first();
	}

	public function create(array $request)
	{
		return User::create([
			'name' => $request['name'],
			'email' => $request['email'],
			'password' => bcrypt($request['password'])
		]);
	}
}