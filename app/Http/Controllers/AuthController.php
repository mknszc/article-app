<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginPostRequest;
use App\Http\Requests\AuthRegisterPostRequest;
use App\Repositories\UserRepositories;
use Exception as ExceptionAlias;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	protected $userRepository;

	public function __construct(UserRepositories $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function register(AuthRegisterPostRequest $request)
    {
		$fields = $request->validated();

	    try {
		    $user = $this->userRepository->create($fields);
		    $token = $user->createToken('myArticleApp')->plainTextToken;

		    return response([
			    'token' => $token
		    ], 201);

	    } catch (ExceptionAlias $e) {

		    return response([
			    'message' => 'Something went wrong'
		    ], 400);
	    }
    }

	public function login(AuthLoginPostRequest $request)
	{
		$fields = $request->validated();

		$user = $this->userRepository->getByEmail($fields['email']);

		if (!($user AND Hash::check($fields['password'],
				$user->password))) {

			return response([
				'message' => 'Bad credit',
			], 401);
		}

		$token = $user->createToken('myArticleApp')->plainTextToken;

		return response([
			'token' => $token
		], 200);
	}
}