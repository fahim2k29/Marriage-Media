<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('payments')) return; 
        Schema::create('payments', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->decimal('quantity', 14,2)->default(1.00);
        $table->string('price');
        $table->string('discount')->default(0);
        $table->tinyInteger('status')->default(0);
        $table->date('purchase_date');
        $table->date('expire_date')->nullable();
        $table->decimal('payment_amount')->nullable();
        $table->string('payment_method')->nullable();
        $table->string('transaction_id')->nullable();
        $table->timestamps();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('package_id');
        $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
        $table->foreign('package_id')->references('id')->on('packages')->onCascade('delete');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
