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
            $table->unsignedBigInteger('DishID')->length(6);
            $table->unsignedBigInteger('RestaurantID')->length(6);
            $table->unsignedBigInteger('MenuID')->length(6);
            $table->integer('Price')->nullable();
            $table->timestamps();

            // Thêm khóa ngoại cho trường DishID
            $table->foreign('DishID')->references('id')->on('dishes')->onDelete('cascade');

            // Thêm khóa ngoại cho trường RestaurantID
            $table->foreign('RestaurantID')->references('id')->on('restaurants')->onDelete('cascade');

            // // Thêm khóa ngoại cho trường MenuID
            // $table->foreign('MenuID')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_menu');
    }
};
