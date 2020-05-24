<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaProduto extends Model
{
    protected $table = 'empresa_produtos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_barra', 'nome', 'descricao', 'imagem', 'valor', 'quantidade', 'status', 'empresa_id', 'categoria_id', 'subcategoria_id',
    ];
}
