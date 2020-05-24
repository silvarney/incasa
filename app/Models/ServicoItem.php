<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicoItem extends Model
{
    protected $table = 'servico_itens';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'descricao', 'avatar', 'valor', 'status', 'servico_id',
    ];
}
