<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function funcionario(){
    	return $this->belongsTo('app\Funcionario');
    }

    public function servidor(){
    	return $this->belongsTo('app\Servidor');
    }

    public function tipoEquipamento(){
    	return $this->belongsTo('app\TipoEquipamento');
    }

    public function pedidoAnterior(){
    	return $this->belongsTo('app\Pedido');
    }

    public function patrimonio(){
    	return $this->hasMany('app\Patrimonio');
    }
}
