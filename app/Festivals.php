<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Festivals extends Model {

	protected $table = 'festivals';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('Name', 'start', 'end', 'location', 'address', 'city', 'website', 'description', 'state','img');
	protected $visible = array('Name', 'start', 'end', 'location', 'address', 'city', 'website', 'description', 'state','img');

	public function eventDays()
	{
		return $this->hasMany('EventDays');
	}

	public function stages()
	{
		return $this->hasMany('Stage');
	}

	public function bands()
	{
		return $this->hasMany('Band');
	}

	public function ticketPrices()
	{
		return $this->hasMany('TicketPrices');
	}

}
