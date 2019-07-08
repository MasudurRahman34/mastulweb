<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    public function children(){
	return $this->belongsTo('App\model\children', 'foreign_id', 'id');
	}
}
