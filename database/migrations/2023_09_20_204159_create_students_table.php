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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Phone')->unique();
            $table->string('Major');
            $table->string('Gender');
            $table->date('Date_of_birth');
            $table->string('status');
            $table->string('linkedin');
            $table->string('github');
            $table->string('img')->default('frontend/img/default-profile-icon.jpg');
            $table->bigInteger('cohort_id')->unsigned();

            $table->foreign('cohort_id')->references('number')->on('cohorts')->onDelete('cascade');
            
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
        Schema::dropIfExists('students');
    }
};
