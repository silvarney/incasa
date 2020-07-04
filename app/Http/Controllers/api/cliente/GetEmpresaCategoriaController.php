<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\EmpresaCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetEmpresaCategoriaController extends Controller
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
        //return EmpresaCategoria::where('empresa_id', $id)->where('status', 'Ativa')->orderBy('nome', 'asc')->get();

        $resposta = DB::table('empresa_categorias')
        ->join('empresa_subcategorias', function ($join) {
            $join->on('empresa_categorias.id', '=', 'empresa_subcategorias.categoria_id')
            ->where('empresa_subcategorias.status', 'Ativa');
        })
        ->join('empresa_produtos', function ($join) {
            $join->on('empresa_categorias.id', '=', 'empresa_produtos.categoria_id')
                ->where('empresa_produtos.status', 'Ativo');
        })
        ->select('empresa_categorias.*')
        ->where('empresa_categorias.empresa_id', $id)
        ->where('empresa_categorias.status', 'Ativa')
        ->orderBy('empresa_categorias.nome', 'asc')
        ->distinct()
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
