<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Laravel Article App",
 *      description="L5 Swagger OpenApi description"
 * )
 * @OA\SecurityScheme(
 *      securityScheme="bearer_token",
 *      type="http",
 *      scheme="bearer"
 * )
 *
 */
class DocController extends Controller
{
	/**
	 * @OA\Post(
	 *      path="/api/register",
	 *      tags={"Auth"},
	 *      summary="Register",
	 *      operationId="Register",
	 *
	 *      @OA\Parameter(
	 *          name="name",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *      @OA\Parameter(
	 *          name="email",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *      @OA\Parameter(
	 *          name="password",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *      @OA\Parameter(
	 *          name="password_confirmation",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *      @OA\Response(
	 *          response=201,
	 *          description="Article Add",
	 *          @OA\JsonContent(type="object"),
	 *      ),
	 *)
	 **/

	public function register()
	{

	}

	/**
	 * @OA\Post(
	 *      path="/api/login",
	 *      tags={"Auth"},
	 *      summary="Login",
	 *      operationId="Login",
	 *
	 *      @OA\Parameter(
	 *          name="email",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *      @OA\Parameter(
	 *          name="password",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *     @OA\Response(
	 *          response=200,
	 *          description="token",
	 *          @OA\JsonContent(type="object"),
	 *      )
	 *)
	 **/

	public function login()
	{

	}

	/**
	 * @OA\Post(
	 *      path="/api/v1/article/add",
	 *      tags={"Article"},
	 *      summary="Article Add",
	 *      operationId="Article Add",
	 *      security={{"bearer_token":{}}},
	 *
	 *      @OA\Parameter(
	 *          name="title",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *      @OA\Parameter(
	 *          name="content",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *     @OA\Response(
	 *          response=200,
	 *          description="token",
	 *          @OA\JsonContent(type="object"),
	 *      )
	 *)
	 */

	public function article()
	{

	}

	/**
	 * @OA\Get (
	 *      path="/api/v1/articles",
	 *      tags={"Article"},
	 *      summary="Articles",
	 *      operationId="Articles",
	 *      security={{"bearer_token":{}}},
	 *
	 *     @OA\Response(
	 *          response=200,
	 *          description="token",
	 *          @OA\JsonContent(type="object"),
	 *      )
	 *)
	 */

	public function articles()
	{

	}

	/**
	 * @OA\Post(
	 *      path="/api/v1/comment/add",
	 *      tags={"Comment"},
	 *      summary="Comment Add",
	 *      operationId="Comment Add",
	 *      security={{"bearer_token":{}}},
	 *
	 *      @OA\Parameter(
	 *          name="article_id",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="integer"
	 *          )
	 *      ),
	 *
	 *      @OA\Parameter(
	 *          name="content",
	 *          in="query",
	 *          required=true,
	 *          @OA\Schema(
	 *              type="string"
	 *          )
	 *      ),
	 *
	 *     @OA\Response(
	 *          response=200,
	 *          description="token",
	 *          @OA\JsonContent(type="object"),
	 *      )
	 *)
	 */

	public function comment()
	{

	}
}
