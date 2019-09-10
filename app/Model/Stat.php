<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model{
 

	public $table    = 'Stat';
	public $fillable = [
	      'number',
	      'font_awesome',
 	      'head_ar',
          'head_en',
          'img',

	];
 
}