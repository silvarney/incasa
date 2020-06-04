<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PublicidadePagamento;
use Illuminate\Http\Request;
use Artistas\PagSeguro\PagSeguro;
use Illuminate\Support\Facades\DB;

class SetPublicidadePagamentoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        
        $request['status'] = 'aguardando pagamento';

        PublicidadePagamento::create($request->all());

        $publicidade = PublicidadePagamento::where('codigo', $request->codigo)->first();

        return $publicidade->id;

    }

    public function show($id)
    {
        
        $resposta = DB::select("SELECT * FROM publicidade_pagamentos
        WHERE empresa_id = ".$id." 
        AND id NOT IN
        (SELECT DISTINCT   pagamento_id
        FROM  publicidade_conteudos PC
        JOIN publicidade_pagamentos AS PP
		ON PP.id = PC.pagamento_id)");

        return response()->json($resposta);
        
    }

    public function update(Request $request, $id)
    {
        $pagamento = PublicidadePagamento::findOrFail($id);
        $pagamento->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
