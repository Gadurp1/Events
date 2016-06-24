<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventDays extends Model {

	protected $table = 'event_days';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('date', 'festival_id');
	protected $visible = array('date', 'festival_id');

}