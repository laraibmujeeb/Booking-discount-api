<?php
// database/migrations/xxxx_xx_xx_create_booking_discounts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDiscountsTable extends Migration
{
    public function up()
    {
        Schema::create('booking_discounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('discount_id')->constrained()->onDelete('cascade');
            $table->integer('usage_count')->default(1);
            $table->decimal('applied_amount', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_discounts');
    }
}
