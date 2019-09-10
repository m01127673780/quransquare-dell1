<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model{
 

	public $table    = 'Videos';
	public $fillable = [
	      'link',
            'img',
	];

}