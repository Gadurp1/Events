<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewslettersTable extends Migration {

	public function up()
	{
		Schema::create('the_newsletters', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('slug', 255)->unique();
			$table->string('description', 255)->nullable();
			$table->string('content');
			$table->enum('status', array('draft', 'publish'))->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('the_newsletters');
	}
}
