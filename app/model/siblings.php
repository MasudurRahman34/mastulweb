<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class siblings extends Model
{
 
   public function children(){
	return $this->belongsTo('App\model\children', 'child_id', 'id');
	}
}
