<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Thread;

class Comment extends Model
{
	protected $fillable = [
		'thread_id','cookie_id','name','spam','content','thread_count'
	];
	public function path(){
		return url('/tag/'.$this->id);
	}
	public function thread()
	{
		return $this->belongsTo(Thread::class);
	}
}
