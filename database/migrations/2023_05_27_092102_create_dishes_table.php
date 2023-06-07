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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('introduction', 1000);
            $table->text('image_url')->nullable();
            $table->unsignedBigInteger('type_id')->length(6);
            $table->timestamps();

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
        Schema::dropIfExists('dishes');
    }
};
