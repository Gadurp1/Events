<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForumsTable extends Migration {

	public function up()
	{
		Schema::create('forums', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id');
			$table->string('title', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('forums');
	}
}