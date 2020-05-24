<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetAllEmpresaController extends Controller
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
        //return Empresa::where('categoria_id', $id)->where('status', 'Ativa')->get();

        $empresa = DB::table('empresas')
        ->join('bairros', function ($join) {
            $join->on('empresas.bairro_id', '=', 'bairros.id');
        })
        ->select('empresas.*', 'bairros.nome as bairro')
        ->where('empresas.categoria_id', $id)->where('empresas.status', 'Ativa')
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
