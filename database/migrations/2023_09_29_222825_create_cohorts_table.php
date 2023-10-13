<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->bigInteger('number')->unique();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('unmber_students');
            $table->integer('unmber_full_stack');
            $table->integer('unmber_front_end');
            $table->integer('unmber_back_end');
            $table->integer('unmber_employment');
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
        Schema::dropIfExists('cohorts');
    }
}