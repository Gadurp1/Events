<?php

namespace App\Forum;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	protected $table = 'topics';
	public $timestamps = true;

	public function Category()
	{
		return $this->belongsTo('Category');
	}

	public function Post()
	{
		return $this->hasMany('Post');
	}

	public function User()
	{
		return $this->belongsTo('User');
	}

}
