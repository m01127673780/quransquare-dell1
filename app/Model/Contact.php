<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
 

	public $table    = 'contact';
	public $fillable = [
        'name',         
       'email',         
       'subject',         
       'phone',         
       'message',         
       'icon',
	];

}