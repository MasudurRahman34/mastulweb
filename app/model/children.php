<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class children extends Model
{
    protected $fillable = [
    'sponson_id', 'childManual_id', 'child_name','slug', 'gender', 'date_of_birth', 'age', 'class', 'school', 'religious','height', 'fat_income', 'mot_income', 'blood_group', 'dream', 'fav_color', 'fav_food', 'fav_place', 'fav_sports', 'fav_personality', 'fav_teacher', 'hobby', 'skills', 'present_address', 'permanent_address', 'informar_name', 'informar_age','father_education', 'mother_education', 'stoppingEdu_reason', 'stay_time', 'where_before', 'changing_residence', 'changing_hsePlan', 'next_residence', 'house_type', 'study_time', 'pre_school', 'reason_chgSchool', 'satisfactory_level', 'noticable_reason', 'parents_problem', 'parents_dream', 'behaviour', 'brilliancy', 'attendency', 'merit_score', 'comment', 'verify_by', 'verify_date', 'father_file', 'mother_file', 'birth_certificate', 'active_status'
];

public function childImages(){
	return $this->hasMany('App\model\childImages', 'child_id', 'id');
	}
public function siblings(){
	return $this->hasMany('App\model\siblings', 'child_id', 'id');
	}
public function guardians(){
	return $this->hasMany('App\model\guardian', 'child_id', 'id');
	}

public function sponsor(){
	return $this->belongsTo('App\model\sponsor','sponson_id');
	}

}
