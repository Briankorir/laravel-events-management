<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('event_type');
            $table->string('event_date');
            $table->string('event_package');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('approves');
    }
}
