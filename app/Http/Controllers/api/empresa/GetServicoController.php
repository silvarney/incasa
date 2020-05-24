<?php

namespace App\Http\Controllers\api\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetServicoController extends Controller
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
        
        $empresa = DB::table('servicos')
        ->join('categorias_setor', function ($join) {
            $join->on('servicos.categoria_id', '=', 'categorias_setor.id');
        })
        ->join('estados', function ($join) {
            $join->on('servicos.estado_id', '=', 'estados.id');
        })
        ->join('cidades', function ($join) {
            $join->on('servicos.cidade_id', '=', 'cidades.id');
        })
        ->join('bairros', function ($join) {
            $join->on('servicos.bairro_id', '=', 'bairros.id');
        })
        ->select('servicos.*', 'categorias_setor.nome as categoria', 'estados.nome as estado', 'cidades.nome as cidade', 'bairros.nome as bairro')
        ->where('servicos.id', '=', $id)
        ->first();

        return response()->json($empresa);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        
    }
}
