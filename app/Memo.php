<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
	protected $fillable = [
    'name','address','lat','lng','url'
   ];
}
