<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('passenger_id');
            $table->integer('vessel_id');
            $table->integer('accomodation_id');
            $table->string('ticket_id');
            $table->string('origin');
            $table->string('destination');
            $table->string('departure_date_time');
            $table->string('arrival_date_time');
            $table->text('net_fare');
            $table->string('total_cost');
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
        Schema::drop('reservations');
    }
}
