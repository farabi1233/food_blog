<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('meal_id');
            $table->unsignedBigInteger('restaurant_id');
            $table->double('price',8,2);
            $table->text('description');
            $table->string('image');
            $table->tinyInteger('rating');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')-> onUpdate('cascade');
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade')-> onUpdate('cascade');
            $table->foreign('restaurant_id')->references('id')->on('restaurents')->onDelete('cascade')-> onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
