<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->integer('adults');
            $table->integer('children')->default(0);
            $table->string('room_number');
            $table->decimal('total_price', 8, 2); // تخزين السعر الكلي مع دقة عشرية
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
