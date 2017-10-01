<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LocationData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_data', function (Blueprint $table) {
          $table->increments('rating_city_id');
          $table->integer('rating_amount')->unsigned();
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
          $table->foreign('rating_amount')->references('rating_id')->on('user_rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_data');
    }
}
