<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('site_tutorials', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->string('icon');
        $table->string('name');
        $table->string('title');
        $table->string('content')->nullable();
        $table->string('url')->nullable();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
