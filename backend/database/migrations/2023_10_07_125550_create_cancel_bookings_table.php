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
        Schema::create('cancel_bookings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('cancel_booking_date');
            $table->string('cancel_person');
            $table->bigInteger('cancel_person_id');
            $table->dateTime('payment_date');
            $table->text('reason');
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
        Schema::dropIfExists('cancel_bookings');
    }
};
