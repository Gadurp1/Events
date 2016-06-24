<?php

namespace App\Forum;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model {

	protected $table = 'forums';
	public $timestamps = true;

	public function categories()
	{
		return $this->hasMany('App\Forum\Category');
	}

}
