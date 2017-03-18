<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientspromocodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientspromocodes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id')->unsigned()->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('promocode_id')->unsigned();
            $table->foreign('promocode_id')->references('id')->on('promocodes');

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
        Schema::dropIfExists('clientspromocodes');
    }
}
