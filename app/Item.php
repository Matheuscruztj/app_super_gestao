<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table =  'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function itemDetalhe(){
        //rel_forte: tabela alvo -> fk dessa tabela -> atributo da tabela origem que é pk dessa interação
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }
}
