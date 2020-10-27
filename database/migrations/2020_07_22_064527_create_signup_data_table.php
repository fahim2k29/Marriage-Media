<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signup_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Country_data')->nullable();
            $table->string('Gender_data')->nullable();
            $table->string('DOB_day_data')->nullable();
            $table->string('DOB_month_data')->nullable();
            $table->string('DOB_year_data')->nullable();
            $table->string('RegistrationReason_data')->nullable();
            $table->string('HearAboutUs_data')->nullable();
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
        Schema::dropIfExists('signup_data');
    }
}
