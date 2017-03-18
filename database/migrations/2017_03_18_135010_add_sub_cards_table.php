<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cards', function (Blueprint $table) {

            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('types');
            $table->integer('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('tests');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            //
        });
    }
}
