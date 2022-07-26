<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicInformationPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_information_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('land_area')->default('0');
            $table->integer('usable_area')->default('0');
            $table->integer('horizontal')->nullable();
            $table->integer('longs')->nullable();
            $table->bigInteger('price');
            $table->integer('number_of_bedrooms');
            $table->integer('number_of_restrooms');
            $table->string('legal_documents')->default('');
            $table->string('main_door_direction')->nullable();
            $table->string('balcony_direction')->nullable();
            $table->string('Interior_condition')->nullable();
            $table->string('highlights')->nullable();
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
        Schema::dropIfExists('basic_information_post');
    }
}
