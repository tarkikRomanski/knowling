<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('subtheme_id')->unsigned();
            $table->foreign('subtheme_id')->references('id')->on('subthemes');

            $table->integer('position');

            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('separator', 7)->nullable();
            $table->string('image')->nullable();
            $table->string('background')->nullable();
            $table->string('card_color', 7)->default('#ffffff');
            $table->text('text');
            $table->string('text_color', 7)->default('#000000');
            $table->string('end_separator', 7)->nullable();
            $table->string('button_color', 7)->nullable();
            $table->string('quote')->nullable();

            $table->integer('parent')->nullable()->comment('Если != null, тогда карта есть основной');




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
        Schema::dropIfExists('cards');
    }
}
