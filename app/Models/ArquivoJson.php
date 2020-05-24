<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArquivoJson extends Model
{
    public function telas()
    {
        $path = storage_path() . "/json/telas.json";

        $bairros = json_decode(file_get_contents($path), true); 
              
        return $bairros;
    }
}
