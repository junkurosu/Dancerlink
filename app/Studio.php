<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = [
		'name','address','lat','lng','url','text','cost','time','code'
	];
}
