<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $table = 'pedido_produtos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'valor', 'valor_total', 'status', 'quantidade', 'desconto_id', 'taxa_id', 'pedido_id', 'produto_id',
    ];
}
