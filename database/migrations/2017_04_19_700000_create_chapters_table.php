<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('chapter_id');
            $table->string('chapter_name');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('level_id')->on('levels')->onDelete('cascade');
            $table->integer('video_id')->unsigned();
            $table->foreign('video_id')->references('video_id')->on('videos')->onDelete('cascade');
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
        Schema::dropIfExists('chapters');
    }
}
