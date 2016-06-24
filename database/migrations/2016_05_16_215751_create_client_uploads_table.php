<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('client_uploads', function (Blueprint $table) {
          $table->string('id')->primary()->increments;
          $table->string('name');
          $table->text('file_path');
          $table->text('description')->nullable();
          $table->text('original_name');
          $table->integer('type');
          $table->integer('file_type');
          $table->integer('size');
          $table->integer('team_id')->nullable()->index();
          $table->integer('user_id')->index();
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
        Schema::drop('client_uploads');
    }
}
