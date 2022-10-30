<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleRepositories
{
	public function all()
	{
		return Article::with('comments')->get();
	}

	public function create(array $request)
	{
		return Article::create([
				'author_id' => Auth::user()->getAuthIdentifier(),
				'title' => $request['title'],
				'content' => $request['content'],
				'slug' => Str::slug($request['title']),
			]);
	}
}