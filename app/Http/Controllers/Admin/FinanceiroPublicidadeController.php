<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PublicidadePagamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroPublicidadeController extends Controller
{
    public function index()
    {
        $publicidade_pagamentos = DB::table('publicidade_pagamentos')
        ->join('cidades', function ($join) {
            $join->on('publicidade_pagamentos.cidade_id', '=', 'cidades.id');
        })
        ->join('empresas', function ($join) {
            $join->on('publicidade_pagamentos.empresa_id', '=', 'empresas.id');
        })
        ->select('publicidade_pagamentos.*', 'cidades.nome as cidade', 'empresas.nome as empresa')
        ->orderBy('id', 'desc')
        ->paginate(15);
        
        //$publicidade_pagamentos = PublicidadePagamento::paginate(15);
        return view('admin.financeiro_publicidade', compact('publicidade_pagamentos'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
