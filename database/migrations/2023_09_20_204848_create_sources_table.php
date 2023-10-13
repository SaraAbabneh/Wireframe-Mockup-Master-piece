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
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Admin_id')->unsigned();
            $table->foreign('Admin_id')->references('id')->on('admins');
            $table->bigInteger('technology_id')->unsigned();
            $table->foreign('technology_id')->references('id')->on('_technologies');
            $table->string('Title');
            $table->mediumText('source 1');
            $table->mediumText('source 2');
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
        Schema::dropIfExists('sources');
    }
};
