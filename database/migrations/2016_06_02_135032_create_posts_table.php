<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('topic_id');
			$table->integer('user_id');
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}