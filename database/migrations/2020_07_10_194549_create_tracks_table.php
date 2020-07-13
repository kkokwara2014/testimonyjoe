<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->bigInteger('user_id')->nullable()->unsigned()->index();
            $table->bigInteger('album_id')->nullable()->unsigned()->index();
            $table->bigInteger('trackcategory_id')->nullable()->unsigned()->index();
            $table->string('filename');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('trackcategory_id')->references('id')->on('trackcategories')->onDelete('cascade');
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
        Schema::dropIfExists('tracks');
    }
}
