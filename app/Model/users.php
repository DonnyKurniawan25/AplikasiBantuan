<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    Protected $guarded = ['id'];
	public $table = 'users';
}
