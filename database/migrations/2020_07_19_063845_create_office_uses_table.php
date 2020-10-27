<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_uses', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->string('FirstName');
           $table->string('LastName');
           $table->string('Address');
           $table->string('City');
           $table->string('Country');
           $table->string('PostCode');
           $table->string('ContactTel');
           $table->string('MobileTel');
           $table->string('DOB_day');
           $table->string('DOB_month');
           $table->string('DOB_year');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_uses');
    }
}
