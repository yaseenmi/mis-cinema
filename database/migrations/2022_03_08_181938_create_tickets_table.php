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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained();
            $table->unsignedBigInteger('screen_id')->constrained();
            $table->unsignedBigInteger('time_id')->constrained();
            $table->unsignedBigInteger('reservation_id')->constrained();
            $table->unsignedBigInteger('movie_id')->constrained();
            $table->unsignedBigInteger('seat_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
