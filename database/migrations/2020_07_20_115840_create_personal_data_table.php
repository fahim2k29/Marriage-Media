<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Citizenship_data');
            $table->string('Origin_data');
            $table->string('Relocation_data');
            $table->string('Income_data');
            $table->string('MarryIn_data');
            $table->string('MaritalStatus_data');
            $table->string('Children_data');
            $table->string('HaveChildren_data');
            $table->string('Living_data');
            $table->string('Height_data');
            $table->string('Build_data');
            $table->string('Hair_data');
            $table->string('EyeColour_data');
            $table->string('Smoke_data');
            $table->string('Disabilities_data');
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
        Schema::dropIfExists('personal_data');
    }
}
