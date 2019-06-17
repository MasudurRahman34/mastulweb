<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentPreferrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_preferrences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sponsor_id')->unsigned();
            $table->integer('number_of_child');
            $table->string('payment_intervel')->nullable();
            $table->string('payment_month')->nullable();
            $table->string('preffered_date')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('amount')->nullable();
            $table->string('transaction_id')->nullable();
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
        Schema::dropIfExists('payment_preferrences');
    }
}
