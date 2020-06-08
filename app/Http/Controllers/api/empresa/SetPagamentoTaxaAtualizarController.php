<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\PagamentoTaxa;
use Illuminate\Http\Request;

class SetPagamentoTaxaAtualizarController extends Controller
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
        //
    }

    public function update(Request $request, $id)
    {
        //atualizacao do status de pagamento
        $pagamento = PagamentoTaxa::where('wirecard_id', $id);
        $pagamento->update($request->all());
        
        $dados_pagamento = PagamentoTaxa::where('wirecard_id', $id)->first();
        
        
        //instanciando empresa
        $empresa = Empresa::findOrFail($dados_pagamento->empresa_id);
        
        //atualizacao de taxa_status em empresa 
        if (isset($empresa) && $empresa->taxa_status === 'pendente') {
            
            $dados['taxa_status'] = 'pago';
            
            $empresa->update($dados);

        }

    }

    public function destroy($id)
    {
        //
    }
}
