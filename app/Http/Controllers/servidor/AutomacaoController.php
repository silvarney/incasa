<?php

namespace App\Http\Controllers\servidor;

use App\Http\Controllers\Controller;
use App\Models\PagamentoTaxa;
use App\Models\Pedido;
use App\Models\PublicidadePagamento;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutomacaoController extends Controller
{
    public function index()
    {
        return 'servidor INCASA';
    }

    public function bloquear_empresa()
    {
        return Pedido::where('taxa_pedido_status', 'pendente')
            ->whereNull('lote')
            ->select('empresa_id', 'aceitacao_data')
            ->groupBy('empresa_id', 'aceitacao_data')
            ->get();
    }

    public function bloquear_divulgacao()
    {
        $pagamentos = PublicidadePagamento::where('status', 'pago')->get();

        $resposta = '';
        $id = '';

        $data_hoje = date("Y-m-d");

        foreach ($pagamentos as $pagamento) {
            
            $data_pgt = date("Y-m-d", strtotime($pagamento->updated_at));
            $id = $pagamento->id;

            if ($pagamento->status === 'pago' && $data_pgt < $data_hoje) {
                DB::table('publicidade_pagamentos')->where('id', $id)->update(['status' => 'pago_vencido']);
            }

        }

        return $resposta;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
