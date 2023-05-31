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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('address', 100);
            $table->string('introduction', 5000);
            $table->text('image_url')->nullable();
            $table->unsignedBigInteger('type_id')->length(6);
            $table->unsignedBigInteger('number_of_tables')->nullable();
            $table->unsignedBigInteger('user_id')->length(6)->nullable();
            $table->float('rating_avg')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->dateTime('opening_time')->nullable();
            $table->dateTime('closing_time')->nullable();
            $table->tinyInteger('legality')->nullable();
            $table->unsignedBigInteger('city_id')->length(6)->nullable();
            $table->timestamps();

            // Them khoa ngoai cho City
            $table->foreign('city_id')->references('id')->on('citys')->onDelete('cascade')->onUpdate('cascade');

            // Them khoa ngoai cho UserID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            // Them khoa ngoai cho TypeID
            $table->foreign('type_id')->references('id')->on('dish_type')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};
