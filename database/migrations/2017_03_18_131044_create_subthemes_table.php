<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubthemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subthemes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('theme_id')->unsigned();
            $table->foreign('theme_id')->references('id')->on('themes');

            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->string('separator', 7)->default('#ffffff');


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
        Schema::dropIfExists('subthemes');
    }
}
