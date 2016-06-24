<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsTable extends Migration {

	public function up()
	{
		Schema::create('topics', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id');
			$table->integer('user_id');
			$table->string('title', 255);
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('topics');
	}
}