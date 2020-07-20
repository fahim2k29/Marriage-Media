<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Citizenship');
            $table->string('Origin');
            $table->string('Relocation');
            $table->string('Income');
            $table->string('MarryIn');
            $table->string('MaritalStatus');
            $table->string('Children');
            $table->string('HaveChildren');
            $table->string('Living');
            $table->string('Height');
            $table->string('Build');
            $table->string('Hair');
            $table->string('EyeColour');
            $table->string('Smoke');
            $table->string('Disabilities');
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
        Schema::dropIfExists('personals');
    }
}
