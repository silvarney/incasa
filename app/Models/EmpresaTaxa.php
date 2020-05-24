<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaTaxa extends Model
{
    protected $table = 'empresa_taxas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'valor', 'status', 'empresa_id',
    ];
}
