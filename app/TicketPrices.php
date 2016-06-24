<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPrices extends Model {

	protected $table = 'ticket_prices';
	public $timestamps = true;
	protected $fillable = array('festival_id', 'event_day_id', 'price', 'description', 'type');
	protected $visible = array('festival_id', 'event_day_id', 'price', 'description', 'type');

}