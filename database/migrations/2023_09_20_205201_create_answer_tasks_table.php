<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_tasks', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->bigInteger('user_id');
            $table->bigInteger('task_id')->unsigned();
            $table->foreign('task_id')->references('id')->on('student_tasks');
            $table->tinyInteger('status');
            $table->mediumText('file');
            $table->text('comment');
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
        Schema::dropIfExists('answer_tasks');
    }
};
