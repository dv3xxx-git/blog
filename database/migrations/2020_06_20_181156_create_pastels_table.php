<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pastel', function (Blueprint $table) {
  $table->increments('id_pastel');
  $table->string('text');
  $table->string('nameP');
  $table->integer('time');
  $table->integer('PPrive');
  $table->timestamps();
  $table->integer('user_id')->unsigned();
  $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastels');
    }
}
