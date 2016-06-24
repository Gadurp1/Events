<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model {

	protected $table = 'events';
	public $timestamps = true;

	public function scopeArtists($id)
	{
		return \App\ArtistEvent::where('event_id',$id);
	}

}
