<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    public function pedido(){
    	return $this->belongsTo('app\Pedido');
    }
}
