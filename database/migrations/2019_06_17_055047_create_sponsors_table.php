<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sponsorManual_id');
            $table->string('type')->comment('individual, organization');
            $table->string('name');
            $table->string('slug');
            $table->string('gender');
            $table->date('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('nationality');
            $table->string('country_of_residence');
            $table->string('maritul_status')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('organization_address')->nullable();
            $table->string('designation')->nullable();
            $table->string('recieve_communication')->nullable();
            $table->string('national_id')->nullable();
            $table->string('passport_id')->nullable();
            $table->integer('active_status')->default(0)->comment("0=didnot sponsor, 1=sponson, 2=disable");
            /*payment preferences*/
            $table->integer('number_of_child')->nullable();
            $table->string('payment_intervel')->nullable();
            $table->string('preffered_date')->nullable();
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
        Schema::dropIfExists('sponsors');
    }
}
