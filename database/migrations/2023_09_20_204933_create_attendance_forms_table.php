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
        Schema::create('attendance_forms', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->bigInteger('status_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->dateTime('Request Date');
            $table->mediumText('File');
            $table->text('Comment');
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
        Schema::dropIfExists('attendance_forms');
    }
};
