<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model{
 

	public $table    = 'Testimonial';
	public $fillable = [
                  'name_ar',
                  'name_en',
                  'job_ar',
                  'job_en',
                  'text_ar',
                  'text_en',
                  'country_ar',
                  'country_en',
                  'img',
	];

}