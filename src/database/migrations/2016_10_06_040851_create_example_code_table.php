<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExampleCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_code', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('example_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->text('description');
            $table->text('filename');
            $table->timestamps();
            $table->longText('code_text');

            $table->foreign('example_id')->references('id')->on('examples');
            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('example_code');
    }
}
