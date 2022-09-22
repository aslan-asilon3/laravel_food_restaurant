<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();

            $table->string('image')->length('50')->nullable();

            $table->string('foodName')->length('50')->nullable();

            $table->integer('price')->length('12')->nullable();

            $table->string('foodRate')->length('10')->nullable();

            $table->string('foodOrigin')->length('50')->nullable();

            $table->string('foodDiscount')->length('50');

            $table->Text('foodDescription');


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
        Schema::dropIfExists('food');
    }
}
