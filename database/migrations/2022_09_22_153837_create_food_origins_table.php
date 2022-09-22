<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodOriginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_origins', function (Blueprint $table) {
            $table->id();
            $table->integer('foodId')->unsigned();
            $table->string('foodOrigin')->length('100');
            $table->string('foodImageCountry')->length('100');
            $table->timestamps();

            $table->foreign('foodId')->references('id')->on('Food')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_origins');
    }
}
