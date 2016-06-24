<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stage extends Model {

	protected $table = 'stages';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('festival_id');
	protected $visible = array('festival_id');

	public function bands()
	{
		return $this->hasMany('Band');
	}

}