<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    protected $table = 'configuracoes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
    'nome', 'tipo', 'status', 'valor','quantidade', 'texto', 'inicio', 'fim', 'dias', 'cidade_id', 'user_id',
    ];
}
