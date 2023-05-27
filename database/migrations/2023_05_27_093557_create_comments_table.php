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
            $table->unsignedBigInteger('UserID')->length(6);
            $table->unsignedBigInteger('RestaurantID')->length(6);
            $table->string('Comment', 5000);
            $table->dateTime('Comment_date');
            $table->float('Rating')->nullable();
            $table->text('Image_URL')->nullable();
            $table->dateTime('Date');
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
        Schema::dropIfExists('comments');
    }
};
