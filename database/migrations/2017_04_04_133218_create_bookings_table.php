<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{

    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('mobile');
            $table->string('venue');
            $table->string('email');
            $table->string('event_type');
            $table->string('county');
            $table->integer('tent100_quantity');
            $table->string('tent100_type');
            $table->integer('tent50_quantity');
            $table->string('tent50_type');
            $table->integer('gazebo_quantity');
            $table->integer('bridal_quantity');
            $table->integer('armless_quantity');
            $table->integer('decorated_chairs');
            $table->string('bridal_bouquet');
            $table->string('maid_corsage');
            $table->string('maid_bouquet');
            $table->string('men_buttonnaire');
            $table->string('car_bouquet');
            $table->string('archs');
            $table->string('gift_table_drapery');
            $table->string('gift_tent_drapery');
            $table->string('cake_table_drapery');
            $table->string('high_table_drapery');
            $table->string('carpet');
            $table->string('public_address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
