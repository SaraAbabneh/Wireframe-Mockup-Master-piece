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
        Schema::create('q_r_scanes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('QR-generate-id')->unsigned();
            $table->foreign('QR-generate-id')->references('id')->on('q_r_generates');
            $table->bigInteger('student-id')->unsigned();
            $table->foreign('student-id')->references('id')->on('students');
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
        Schema::dropIfExists('q_r_scanes');
    }
};
