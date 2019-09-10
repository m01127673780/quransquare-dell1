<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model{
 

	public $table    = 'Teachers';
	public $fillable = [
	      'name_ar',
	      'name_en',
	      'head_ar',
          'head_en',
	      'link',
          'img',

	];

}