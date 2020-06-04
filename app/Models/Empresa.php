<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cnpj', 'fone', 'rua', 'numero', 'complemento', 'descricao', 'status', 'img_perfil', 'img_perfil_arquivo', 'img_capa', 'img_capa_arquivo', 'latitude', 'longitude', 'categoria_id', 'estado_id', 'cidade_id', 'bairro_id', 'pgt_dinheiro', 'pgt_cartao', 'pedido_minimo', 'pedido_maximo', 'pedido_status', 'taxa_status', 'proprio', 'externo', 'balcao', 'criador', 'anuncio',
    ];
}
