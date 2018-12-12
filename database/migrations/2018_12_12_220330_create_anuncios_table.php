<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_anuncio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('category_id')->unsigned();
            $table->text('description');
            $table->string('avatar');
            $table->string('slug')->unique();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //referencias

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_anuncio');
    }
}
