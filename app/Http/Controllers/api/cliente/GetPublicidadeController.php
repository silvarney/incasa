<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\PublicidadeConteudo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetPublicidadeController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $cidade)
    {

        $resposta = DB::table('publicidade_conteudos')
            ->join('publicidade_pagamentos', function ($join) {
                $join->on('publicidade_conteudos.pagamento_id', '=', 'publicidade_pagamentos.id');
            })
            ->join('categorias_setor', function ($join) {
                $join->on('publicidade_conteudos.categoria_id', '=', 'categorias_setor.id');
            })
            ->select('publicidade_conteudos.*', 'categorias_setor.nome as categoria_nome', 'categorias_setor.imagem as categoria_imagem')
            ->where('publicidade_pagamentos.status', 'pago')
            ->where('publicidade_conteudos.cidade_id', $cidade)
            ->where('publicidade_conteudos.tela', $request->tela)
            ->inRandomOrder()
            ->limit(1)
            ->get();

            if (count($resposta) === 0) {
                $resposta = PublicidadeConteudo::findOrFail(0);
            }
        return $resposta;
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
