<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    public function pedido(){
    	return $this->hasMany('app\Pedido');
    }
}
