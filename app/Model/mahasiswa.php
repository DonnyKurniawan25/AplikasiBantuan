<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
	Protected $guarded = ['id'];
	public $table = 'tbl_mahasiswa';
}
