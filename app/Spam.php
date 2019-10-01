<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Comment;

class Spam extends Model
{
	protected $fillable = [
		'comment_id','cookie_id'
	];
	public function comment()
	{
		return $this->belongsTo(Comment::class);
	}
}
