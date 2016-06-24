<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model {

	protected $table = 'events';
	public $timestamps = true;

	public function artists()
	{
		return $this->hasMany('artists');
	}

}
