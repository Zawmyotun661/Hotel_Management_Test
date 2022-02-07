<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address');
            $table->integer('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('check_in_time');
            $table->string('check_out_time');
            $table->string('adult_number');
            $table->string('children_number');
            $table->string('room');
            $table->string('room_1');
            $table->string('room_2')->nullable();
            $table->string('instructions');
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
        Schema::dropIfExists('reservations');
    }
}
