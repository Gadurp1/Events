<?php

namespace App\Forum;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	public $timestamps = true;

	public function Forum()
	{
		return $this->belongsTo('Forum');
	}

	public function Topic()
	{
		return $this->hasMany('Topic');
	}

}
