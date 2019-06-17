<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class sponsor extends Model
{
    public function sponsorImages(){
	return $this->hasMany('App\model\sponsorImages', 'sponsor_id');
	}
public function socialCommunication(){
	return $this->hasMany('App\model\socialCommunication', 'sponsor_id');
	}
public function children(){
	return $this->hasMany('App\model\children', 'sponson_id');
	}
}
