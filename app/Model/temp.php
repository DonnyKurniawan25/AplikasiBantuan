<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class temp extends Model
{
    public $table = 'tbl_temp';
	protected $guarded = ['id'];

	public function testing()
	{
		return $this->belongsTo('App\Model\testing','Nim');
	}
}
