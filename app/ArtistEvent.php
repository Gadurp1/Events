<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArtistEvent extends Model {

	protected $table = 'artists';
	public $timestamps = true;


}
