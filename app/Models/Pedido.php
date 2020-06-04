<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'codigo', 'valor', 'valor_total', 'quantidade', 'observacao', 'status', 'forma_pagamento', 'tipo_entrega', 'classificacao', 'taxa_pedido', 'taxa_pedido_status', 'taxa_entregador', 'taxa_entregador_status', 'solicitacao', 'solicitacao_hora', 'aceitacao', 'aceitacao_hora', 'aceitacao_data', 'liberacao', 'liberacao_hora', 'entrega', 'entrega_hora', 'cancelado', 'cancelado_hora', 'cancelado_autor', 'desconto_id', 'taxa_id', 'user_id', 'endereco_id', 'empresa_id', 'entregador_id', 'lote',
    ];
}
