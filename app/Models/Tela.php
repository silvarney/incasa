<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tela extends Model
{
    protected $table = 'telas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'status', 'cidade_id',
    ];
}
