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
        Schema::create('q_r_generates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin-id')->unsigned();
            $table->foreign('admin-id')->references('id')->on('admins');
            $table->bigInteger('status-id')->unsigned();
            $table->foreign('status-id')->references('id')->on('statuses');
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
        Schema::dropIfExists('q_r_generates');
    }
};
