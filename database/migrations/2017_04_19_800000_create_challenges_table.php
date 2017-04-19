<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->increments('challenge_id');
            $table->string('challenge_name');
            $table->longText('challenge_content');
            $table->longText('challenge_source_code');
            $table->integer('type_challenge_id')->unsigned();
            $table->foreign('type_challenge_id')->references('type_challenge_id')->on('type_challenges')->onDelete('cascade');
            $table->integer('chapter_id')->unsigned();
            $table->foreign('chapter_id')->references('chapter_id')->on('chapters')->onDelete('cascade');
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
        Schema::dropIfExists('challenges');
    }
}
