<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
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
        $resposta = DB::table('servicos')
        ->join('bairros', function ($join) {
            $join->on('servicos.bairro_id', '=', 'bairros.id');
        })
        ->join('cidades', function ($join) {
            $join->on('servicos.cidade_id', '=', 'cidades.id');
        })
        ->join('estados', function ($join) {
            $join->on('servicos.estado_id', '=', 'estados.id');
        })
        ->select('servicos.*', 'bairros.nome as bairro', 'cidades.nome as cidade', 'estados.nome as estado')
        ->where('servicos.id', $id)->where('servicos.status', 'Ativa')
        ->get();

        return response()->json($resposta);
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
