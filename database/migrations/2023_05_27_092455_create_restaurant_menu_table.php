<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dish_id')->length(6);
            $table->unsignedBigInteger('restaurant_id')->length(6);
            $table->integer('price')->nullable();
            $table->timestamps();

            // Thêm khóa ngoại cho trường DishID
            $table->foreign('dish_id')->references('id')->on('dishes')->onDelete('cascade');

            // Thêm khóa ngoại cho trường RestaurantID
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::dropIfExists('restaurant_menus');
    }
};
