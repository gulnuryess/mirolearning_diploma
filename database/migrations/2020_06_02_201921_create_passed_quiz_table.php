<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassedQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passed_quiz', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('topic_id')->unsigned();
            $table->bigInteger('topic_quiz_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('is_correct');
            $table->timestamps();

            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('topic_quiz_id')->references('id')->on('topic_quiz');
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
        Schema::dropIfExists('passed_quiz');
    }
}
