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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phoneno');
            $table->string('email')->unique();
            $table->string('country');
            $table->string('language');
            $table->string('username');
            $table->string('emailid')->unique();
            $table->string('password');
            $table->string('password_confirmation');
            $table->string('schoolname');
            $table->string('boardname');
            $table->string('universityname');
            $table->string('coursename');
            $table->string('experience1');
            $table->string('position1');
            $table->string('experience2');
            $table->string('position2');
            $table->string('experience3');
            $table->string('position3');
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
        Schema::dropIfExists('details');
    }
};
