<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('artistfullname');
            $table->string('yearofpub');
            $table->bigInteger('albumcategory_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('albumimage');
            $table->foreign('albumcategory_id')->references('id')->on('albumcategories')->onDelete('cascade');
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
        Schema::dropIfExists('albums');
    }
}
