<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model{
 

	public $table    = 'slider';
	public $fillable = [
	      'link',
            'img',
	];

}