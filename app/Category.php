<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Meta;
use \App\Thread;

class Category extends Model
{
	protected $fillable = [
		'name','description','affiliate_text','affiliate_url','ranking','image_url'
	];
	public function path(){
		return url('/category/'.$this->id);
	}
	public function metas()
	{
		return $this->hasMany(Meta::class);
	}
	public function threads()
	{
		return $this->hasMany(Thread::class);
	}
}
