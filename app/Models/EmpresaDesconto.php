<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaDesconto extends Model
{
    protected $table = 'empresa_descontos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'valor', 'status', 'empresa_id',
    ];
}
