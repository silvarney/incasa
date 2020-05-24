<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioEndereco extends Model
{
    
    protected $table = 'usuario_enderecos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'rua', 'numero', 'complemento', 'descricao', 'status', 'latitude', 'longitude', 'cidade_id', 'bairro_id', 'user_id',
    ];

}
