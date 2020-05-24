<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaSetor;
use Illuminate\Support\Facades\DB;

class GetCategoriaSetorController extends Controller
{
    public function index()
    {
        return CategoriaSetor::where('status', 'Ativa')->get();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $setor) 
    {
        if ($setor == 1) {
            
            $resposta = DB::table('categorias_setor')
            ->join('empresas', function ($join) {
                $join->on('categorias_setor.id', '=', 'empresas.categoria_id');
            })
            ->select('categorias_setor.*')
            ->where('categorias_setor.status', 'Ativa')
            ->where('categorias_setor.setor', $setor)
            ->where('categorias_setor.cidade_id', $request->cidade_id)
            ->distinct()
            ->get();

        } if ($setor == 2) {
            
            $resposta = DB::table('categorias_setor')
            ->join('servicos', function ($join) {
                $join->on('categorias_setor.id', '=', 'servicos.categoria_id');
            })
            ->select('categorias_setor.*')
            ->where('categorias_setor.status', 'Ativa')
            ->where('categorias_setor.setor', $setor)
            ->where('categorias_setor.cidade_id', $request->cidade_id)
            ->distinct()
            ->get();

        }
        

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
