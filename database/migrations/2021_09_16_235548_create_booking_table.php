<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->foreignId('patron_id')->constrained('patrons', 'patron_id');
            $table->foreignId('company_id')->constrained('reservations', 'company_id');
            $table->foreignId('hotel_id')->constrained('hotels', 'hotel_id');
            $table->foreignId("schedule_id")->constrained('schedules', 'schedule_id');
            $table->string('status');
            $table->string('payment_method');
            $table->timestamps();
            $table->softDeletes();
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
}
