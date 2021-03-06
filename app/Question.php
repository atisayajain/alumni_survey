<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $primaryKey = 'id';
    public $timestamps = true;

    public function answers() {
    	return $this->hasMany('App\Answer');
    }

}
