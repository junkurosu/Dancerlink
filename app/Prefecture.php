<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = [
		'code',
		'name',
		'pref_name',
		'city_name',
		'city_sub_name',
		'lat',
		'lng',
	];
}

