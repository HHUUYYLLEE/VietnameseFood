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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->length(6);
            $table->unsignedBigInteger('restaurant_id')->length(6);
            $table->string('comment', 5000);
            $table->dateTime('comment_date');
            $table->float('rating')->nullable();
            $table->text('image_url')->nullable();
            $table->dateTime('date');
            $table->timestamps();

            // Thêm khóa ngoại cho trường UserID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('comments');
    }
};
