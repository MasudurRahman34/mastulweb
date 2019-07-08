<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class monthlyPayment extends Model
{
    public function sponsor(){
	return $this->belongsTo('App\model\sponsor');
	}
}
