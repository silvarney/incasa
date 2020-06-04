<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaDestaque extends Model
{
    protected $table = 'empresa_destaques';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagem', 'titulo', 'descricao', 'status', 'empresa_id', 'user_id',
    ];
}
