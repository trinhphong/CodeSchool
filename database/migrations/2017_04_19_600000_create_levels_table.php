<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('level_id');
            $table->string('level_name');
            $table->longText('level_description');
            $table->text('level_note');
            $table->string('level_image');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('course')->onDelete('cascade');
            $table->integer('slide_id')->unsigned();
            $table->foreign('slide_id')->references('slide_id')->on('slides')->onDelete('cascade');
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
        Schema::dropIfExists('levels');
    }
}
