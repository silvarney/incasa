<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    protected $table = 'vw_taxa_pedido';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
    'total_pedidos', 'valor_taxa', 'valor_pedido', 'empresa_id','nome_empresa',
    ];
}
