<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model{
 

	public $table    = 'News';
	public $fillable = [
	      'name',
          'password',
          'icon',

	];

}