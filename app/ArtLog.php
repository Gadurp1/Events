<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArtLog extends Model {

	protected $table = 'art_log';
	public $timestamps = true;
	protected $fillable = array('name');

}
