<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function funcionario(){
    	return $this->belongsTo('app\Funcionario');
    }
}
