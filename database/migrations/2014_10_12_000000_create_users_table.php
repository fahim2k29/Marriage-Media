<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('UserName');
            $table->string('Email');
            $table->string('ConfirmEmail');
            $table->string('Country');
            $table->string('Gender');
            $table->string('DOB_day');
            $table->string('DOB_month');
            $table->string('DOB_year');
            $table->string('RegistrationReason');
            $table->string('HearAboutUs');
            $table->string('Accept');
            $table->string('password');

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
        Schema::dropIfExists('users');
    }
}
