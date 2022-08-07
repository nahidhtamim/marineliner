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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id');
            $table->string('company_name');
            $table->string('company_address');
            $table->tinyInteger('from_country');
            $table->tinyInteger('from_port');
            $table->tinyInteger('destination_country');
            $table->tinyInteger('destination_port');
            $table->tinyInteger('container_id');
            $table->date('booking_date');
            $table->string('goods');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('bookings');
    }
};
