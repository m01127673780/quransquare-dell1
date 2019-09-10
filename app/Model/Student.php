<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model{
 

	public $table    = 'student';
	public $fillable = [
        'name',         
       'email',         
       'subject',         
       'phone',         
       'message',         
       'icon',
	];

}