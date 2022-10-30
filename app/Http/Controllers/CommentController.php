<?php

namespace App\Http\Controllers;

use App\Repositories\CommentRepositories;
use Exception as ExceptionAlias;
use App\Http\Requests\CommentPostRequest;

class CommentController extends Controller
{
	protected $commentRepository;

	public function __construct(CommentRepositories $commentRepository)
	{
		$this->commentRepository = $commentRepository;
	}

    public function store(CommentPostRequest $request)
    {
	    $fields = $request->validated();

	    try {
		    $comment = $this->commentRepository->create($fields);

		    return response([
			    'message' => 'Comment created',
			    'comment' => $comment
		    ], 201);

	    } catch (ExceptionAlias $e) {

		    return response([
			    'message' => 'Something went wrong'
		    ], 400);
	    }
    }
}