<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaSetor extends Model
{
    protected $table = 'categorias_setor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
    'nome', 'tipo', 'setor', 'status', 'cidade_id',
    ];
}
