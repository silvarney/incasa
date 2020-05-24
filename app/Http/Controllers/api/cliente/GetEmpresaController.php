<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        
        $empresa = DB::table('empresas')
        ->join('bairros', function ($join) {
            $join->on('empresas.bairro_id', '=', 'bairros.id');
        })
        ->join('cidades', function ($join) {
            $join->on('empresas.cidade_id', '=', 'cidades.id');
        })
        ->join('estados', function ($join) {
            $join->on('empresas.estado_id', '=', 'estados.id');
        })
        ->select('empresas.*', 'bairros.nome as bairro', 'cidades.nome as cidade', 'estados.nome as estado')
        ->where('empresas.id', $id)->where('empresas.status', 'Ativa')
        ->get();

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
