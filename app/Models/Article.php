<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment as Comment;

/**
 * @method static create(array $array)
 */
class Article extends Model
{
    use HasFactory;

	protected $fillable = [
		'title',
		'content',
		'author_id',
		'slug'
	];

	public function comments()
	{
		return $this->hasMany(Comment::class, 'article_id');
	}
}
