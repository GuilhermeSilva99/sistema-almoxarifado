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
}
