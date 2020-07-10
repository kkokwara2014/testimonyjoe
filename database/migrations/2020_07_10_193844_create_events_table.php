<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id')->nullable();
            $table->bigInteger('user_id')->nullable()->unsigned()->index();
            $table->string('title');
            $table->string('slug');
            $table->string('venue');
            $table->text('description')->nullable();
            $table->string('eventdate');
            $table->string('eventtime');
            $table->tinyInteger('isdone')->default('0');
            $table->string('image');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
}
