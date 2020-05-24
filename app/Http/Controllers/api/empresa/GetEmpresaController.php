<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;

class GetEmpresaController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //return Empresa::findOrFail($id);

        $empresa = DB::table('empresas')
        ->join('categorias_setor', function ($join) {
            $join->on('empresas.categoria_id', '=', 'categorias_setor.id');
        })
        ->join('estados', function ($join) {
            $join->on('empresas.estado_id', '=', 'estados.id');
        })
        ->join('cidades', function ($join) {
            $join->on('empresas.cidade_id', '=', 'cidades.id');
        })
        ->join('bairros', function ($join) {
            $join->on('empresas.bairro_id', '=', 'bairros.id');
        })
        ->join('users', function ($join) {
            $join->on('empresas.criador', '=', 'users.id');
        })
        ->select('empresas.*', 'categorias_setor.nome as nome_categoria', 'estados.nome as nome_estado', 'cidades.nome as nome_cidade', 'bairros.nome as nome_bairro', 'users.nome as nome_criador')
        ->where('empresas.id', '=', $id)
        ->first();

        return response()->json($empresa);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
