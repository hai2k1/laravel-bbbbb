<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unique();
            $table->string('category')->default('');
            $table->string('province')->default('');
            $table->string('district')->default('');
            $table->string('ward')->default('');
            $table->integer('id_projectbds')->nullable();
            $table->string('address')->default('');
            $table->string('status_address')->default('');
            $table->integer('floors_number')->nullable();
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
        Schema::dropIfExists('location_information');
    }
}
