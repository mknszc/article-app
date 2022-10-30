<?php

namespace App\Repositories;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentRepositories
{
	public function create(array $request)
	{
		return Comment::create([
			'author_id' => Auth::user()->getAuthIdentifier(),
			'article_id' => $request['article_id'],
			'content' => $request['content'],
		]);
	}
}