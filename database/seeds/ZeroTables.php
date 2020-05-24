<?php

use Illuminate\Database\Seeder;
use App\Models\Bairro;
use App\Models\CategoriaSetor;
use App\Models\Cidade;
use App\Models\Empresa;
use App\Models\EmpresaDesconto;
use App\Models\EmpresaTaxa;
use App\Models\Entregador;
use App\Models\Estado;
use App\Models\Usuario;

class ZeroTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Estado::create([
            'id' => 0,
            'nome'      => NULL,
        ]);

        Cidade::create([
            'id' => 0,
            'nome'      => false,
            'estado_id' => 0,
        ]);

        Bairro::create([
            'id' => 0,
            'nome'      => false,
            'cidade_id' => 0,
        ]);

        Usuario::create([
            'id' => 0,
            'email'      => 'usuariozero@incasa.com',
            'password'      => '123jhg12hg12ggjhv123c4543nb',
            'cidade_id' => 0,
        ]);

        CategoriaSetor::create([
            'id' => 0,
            'nome'      => false,
            'cidade_id' => 0,
        ]);

        Entregador::create([
            'id' => 0,
            'identidade'      => false,
        ]);

        Empresa::create([
            'id' => 0,
            'categoria_id' => 0,
            'estado_id' => 0,
            'cidade_id' => 0,
            'bairro_id' => 0, 
        ]);

        EmpresaTaxa::create([
            'id' => 0,
            'empresa_id'      => 0,
        ]);

        EmpresaDesconto::create([
            'id' => 0,
            'empresa_id'      => 0,
        ]);

    }
}
