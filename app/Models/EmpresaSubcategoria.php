<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaSubcategoria extends Model
{
    protected $table = 'empresa_subcategorias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'imagem', 'status', 'empresa_id', 'categoria_id',
    ];
}
