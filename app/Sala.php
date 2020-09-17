<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function servidor(){
    	return $this->hasMany('app\Servidor');
    }
}
