<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('bookingref');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('eventtype');
            $table->string('eventdate');
            $table->string('eventtime');
            $table->bigInteger('country_id')->nullable()->unsigned()->index();
            $table->tinyInteger('isdone')->default('0');
            $table->text('additionalinfo')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
}
