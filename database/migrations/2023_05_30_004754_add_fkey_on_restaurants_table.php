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
        //
        Schema::table('restaurants', function (Blueprint $table) {
            // Them khoa ngoai cho UserID
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            // Them khoa ngoai cho TypeID
            $table->foreign('TypeID')->references('id')->on('dish_type')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
