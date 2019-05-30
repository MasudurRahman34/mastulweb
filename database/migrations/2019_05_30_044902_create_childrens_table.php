<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('childManual_id');
            $table->integer('sponson_id')->unsigned();
            $table->string('child_name');
            $table->string('gender');
            $table->date('date_of_birth')->nullable();
            $table->string('age');
            $table->string('class');
            $table->string('school');
            $table->string('religious')->nullable();
            $table->string('height')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('dream')->nullable();
            $table->string('fav_color')->nullable();
            $table->string('fav_food')->nullable();
            $table->string('fav_place')->nullable();
            $table->string('fav_sports')->nullable();
            $table->string('fav_personality')->nullable();
            $table->string('fav_teacher')->nullable();
            $table->string('hobby')->nullable();
            $table->string('skills')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
           /* $table->string('father_name')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_occupation')->nullable();
            $table->integer('father_income')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_mobile')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->integer('mother_income')->nullable();*/
            $table->string('informar_name')->nullable();
            $table->string('informar_age')->nullable();
            $table->string('father_education')->nullable();
            $table->string('mother_education')->nullable();
            $table->string('stoppingEdu_reason')->nullable();
            $table->string('stay_time')->nullable();
            $table->string('where_before')->nullable();
            $table->string('changing_residence')->nullable();
            $table->string('changing_hsePlan')->nullable();
            $table->string('next_residence')->nullable();
            $table->string('house_type')->nullable();
            $table->string('study_time')->nullable();
            $table->string('pre_school')->nullable();
            $table->string('reason_chgSchool')->nullable();
            $table->string('satisfactory_level')->nullable();
            $table->string('noticable_reason')->nullable();
            $table->string('parents_problem')->nullable();
            $table->string('parents_dream')->nullable();
            $table->string('behaviour')->nullable();
            $table->string('brilliancy')->nullable();
            $table->string('attendency')->nullable();
            $table->string('merit_score')->nullable();
            $table->string('comment')->nullable();
            $table->string('verify_by')->nullable();
            $table->date('verify_date')->nullable();
            $table->string('father_file')->nullable();
            $table->string('mother_file')->nullable();
            $table->string('birth_certificate')->nullable();
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
        Schema::dropIfExists('childrens');
    }
}
