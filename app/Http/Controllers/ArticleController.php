<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepositories;
use Exception as ExceptionAlias;
use App\Http\Requests\ArticlePostRequest;

class ArticleController extends Controller
{
	protected $articleRepository;

	public function __construct(ArticleRepositories $articleRepository)
	{
		$this->articleRepository = $articleRepository;
	}

	public function index()
	{
		$articles = $this->articleRepository->all();

		return response([
			'message' => 'Articles',
			'articles' => $articles
		], 201);
	}

	public function store(ArticlePostRequest $request)
	{
		$fields = $request->validated();

		try {
			$article = $this->articleRepository->create($fields);

			return response([
				'message' => 'Article created',
				'article' => $article
			], 201);

		} catch (ExceptionAlias $e) {

			return response([
				'message' => 'Something went wrong'
			], 400);
		}
	}
}