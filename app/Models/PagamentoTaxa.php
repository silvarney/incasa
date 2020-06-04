<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagamentoTaxa extends Model
{
    protected $table = 'pagamento_taxas';
    
    protected $fillable = [
        'codigo', 'valor', 'status', 'forma_pagamento', 'wirecard_id', 'wirecard_data', 'empresa_id', 'user_id',
    ];
}
