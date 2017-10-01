<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rating', function (Blueprint $table) {
          $table->increments('rating_id');
          $table->integer('user_id')->unsigned();
          $table->string('street_name');
          $table->integer('house_number');
          $table->integer('zip_code');
          $table->string('city');
          $table->string('safety');
          $table->string('noise_level');
          $table->string('neighborhood');
          $table->string('online_connections');
          $table->string('child_friendly');
          $table->string('recommendation');
          $table->string('parking');
          $table->string('clean_environment');
          $table->string('cozyness');
          $table->string('style');
          $table->string('condition');
          $table->string('total_satisfaction');
          $table->rememberToken();
          $table->timestamps();
          $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_rating');
    }
}
