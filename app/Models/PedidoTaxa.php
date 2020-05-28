<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoTaxa extends Model
{
    protected $table = 'vw_taxa_pedido';
    
    protected $fillable = [
        'total_pedidos', 'valor_taxa', 'status', 'valor_pedido', 'empresa_id', 'nome_empresa',
    ];
}
