<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'avatar', 'fone', 'cpf', 'nascimento', 'sexo', 'tipo', 'nivel', 'status', 'latitude', 'longitude', 'email', 'password', 'password_app', 'cidade_id',
    ];
}
