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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID')->length(6);
            $table->unsignedBigInteger('RestaurantID')->length(6);
            $table->dateTime('Booking_date_time');
            $table->integer('Number_of_people');
            $table->tinyInteger('Status');
            $table->timestamps();

            // Thêm khóa ngoại cho trường UserID
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');

            // Thêm khóa ngoại cho trường RestaurantID
            $table->foreign('RestaurantID')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
