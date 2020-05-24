<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $table = 'feed';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
    'tipo', 'titulo', 'subtitulo', 'descricao', 'img', 'status', 'cidade_id', 'user_id',
    ];
}
