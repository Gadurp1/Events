<?php

namespace App\Forum;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $table = 'user_profile';
	public $timestamps = true;

	public function User()
	{
		return $this->belongsTo('User');
	}

}
