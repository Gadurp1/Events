<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Band extends Model {

	protected $table = 'bands';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'description', 'stage_id', 'festival_id', 'event_day_id');
	protected $visible = array('name', 'description', 'stage_id', 'festival_id', 'event_day_id');

}
