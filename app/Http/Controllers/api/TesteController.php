<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\EmpresaCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesteController extends Controller
{
    // controle para testes
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
        //get empresa subcategoria

        $resposta = DB::table('empresa_subcategorias')
            ->join('empresa_produtos', function ($join) {
                $join->on('empresa_subcategorias.id', '=', 'empresa_produtos.subcategoria_id')
                    ->where('empresa_produtos.status', 'Ativo');
            })
            ->select('empresa_subcategorias.*')
            ->where('empresa_subcategorias.empresa_id', $id)
            ->where('empresa_subcategorias.status', 'Ativa')
            ->orderBy('empresa_subcategorias.nome', 'asc')
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
