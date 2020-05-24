<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetAllServicoController extends Controller
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
        ->select('servicos.*', 'bairros.nome as bairro')
        ->where('servicos.categoria_id', $id)->where('servicos.status', 'Ativa')
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
