<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Category;
use \App\Comment;
class Thread extends Model
{
	protected $fillable = [
		'category_id','count','title','description'
	];
	public function category()
	{
		return $this->belongsTo(Category::class);
	}
	public function path()
	{
		return url('/thread/'.$this->id);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
