<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Comment extends Model
{
    use HasFactory;

	protected $fillable = [
		'content',
		'author_id',
		'article_id',
		'rating',
		'approved'
	];
}
