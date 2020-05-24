<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicidadeConteudo extends Model
{
    protected $table = 'publicidade_conteudos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
    'tela', 'imagem', 'link', 'empresa_id', 'categoria_id', 'cidade_id','pagamento_id',
    ];
}
