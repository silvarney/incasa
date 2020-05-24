<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaCategoria extends Model
{
    protected $table = 'empresa_categorias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'imagem', 'status', 'empresa_id',
    ];
}
