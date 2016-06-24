<?php

namespace App\Forum;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	public $timestamps = true;

	public function UserProfile()
	{
		return $this->hasOne('Profile');
	}

	public function Topic()
	{
		return $this->hasMany('Topic');
	}

	public function Post()
	{
		return $this->hasMany('Post');
	}

}
