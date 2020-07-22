<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReligionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religion_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Religiosness_data');
            $table->string('Sect_data');
            $table->string('Hijab_data');
            $table->string('Beard_data');
            $table->string('Convert_data');
            $table->string('Halaal_data');
            $table->string('Salaah_data');
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
        Schema::dropIfExists('religion_data');
    }
}
