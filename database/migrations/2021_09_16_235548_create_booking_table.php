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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('booking_id');
            $table->foreignId('user_id')->constrained('users','user_id');
            $table->foreignId('company_id')->constrained('reservation','company_id');
            $table->foreignId('hotel_id')->constrained('hotels','hotel_id');
            $table->foreignId('p_id')->constrained('programs','p_id');
            $table->foreignId("schedule_id")->constrained('schedule','schedule_id');
            $table->date('current_date');
            $table->string('status');
            $table->string('payment_method');
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
        Schema::dropIfExists('booking');
    }
}
