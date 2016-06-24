<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('forum_id');
			$table->string('title', 255);
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}