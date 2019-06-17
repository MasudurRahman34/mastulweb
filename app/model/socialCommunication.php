<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class socialCommunication extends Model
{
    public function sponsor(){
	return $this->belongsTo('App\model\sponsor','sponsor_id','id');
	}
}
