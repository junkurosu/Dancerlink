<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Thred;
use \App\Category;

class Meta extends Model
{
	protected $fillable = [
		'category_id','meta_key','meta_value','priority'
	];
	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
