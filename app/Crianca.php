<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crianca extends Model
{
    protected $table='padrinhos';
    protected $primaryKey='padrinho_id';
    protected $fillable=['nome','sexo','idade','naturalidade','peso','altura','foto','doenca','grau_necessidade','estado','descricao'];


     public function padrinhos()
    {
    	return $this->belongsToMany('App\Padrinho', 'padrinho_criancas', 'crianca_id', 'padrinho_id');

    } 
}
