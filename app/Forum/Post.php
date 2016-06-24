<?php

namespace App\Forum;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'posts';
	public $timestamps = true;

	public function Topic()
	{
		return $this->belongsTo('Topic');
	}

	public function User()
	{
		return $this->belongsTo('User');
	}

}
