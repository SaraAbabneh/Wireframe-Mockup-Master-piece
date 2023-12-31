<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('Email')->unique();
            $table->string('password');
            $table->string('Phone')->unique();
            $table->string('Gender');
            $table->date('Date_of_birth');
            $table->string('linkedin');
            $table->string('position');
            $table->string('img')->default('frontend/img/default-profile-icon.jpg');
            $table->tinyInteger('Role');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
};