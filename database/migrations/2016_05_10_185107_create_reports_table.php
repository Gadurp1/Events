<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reports', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->text('photo_url');
          $table->text('description')->nullable();
          $table->integer('type')->index();
          $table->integer('team_id')->nullable()->index();
          $table->integer('user_id')->index();
          $table->text('storage_path');
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
      Schema::drop('reports');
    }
}
