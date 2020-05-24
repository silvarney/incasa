<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicidadePagamento extends Model
{
    protected $table = 'publicidade_pagamentos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
    'tipo', 'codigo', 'valor', 'inicio', 'fim','dias', 'status', 'tela_id', 'cidade_id', 'empresa_id', 'user_id',
    ];
}
