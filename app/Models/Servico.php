<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servicos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'fone', 'rua', 'numero', 'complemento', 'descricao', 'status', 'categoria_id', 'estado_id', 'cidade_id', 'bairro_id', 'user_id',
    ];
}
