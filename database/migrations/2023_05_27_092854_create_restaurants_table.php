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
            $table->string('Name', 100);
            $table->string('Address', 100);
            $table->string('Introduction', 5000);
            $table->text('Image_URL')->nullable();
            $table->unsignedBigInteger('TypeID')->length(6);
            $table->unsignedBigInteger('NumberOfTables')->nullable();
            $table->unsignedBigInteger('UserID')->length(6)->nullable();
            $table->float('RatingAvg')->nullable();
            $table->tinyInteger('Status')->nullable();
            $table->dateTime('Opening_time')->nullable();
            $table->dateTime('Closing_time')->nullable();
            $table->tinyInteger('Legality')->nullable();
            $table->unsignedBigInteger('CityID')->length(6)->nullable();
            $table->timestamps();

            // Them khoa ngoai cho City
            $table->foreign('CityID')->references('id')->on('citys')->onDelete('cascade')->onUpdate('cascade');
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
