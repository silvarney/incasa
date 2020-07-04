<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetDadosEmpresaPedidoController extends Controller
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
        $resposta = DB::table('empresas')
            ->join('empresa_descontos', function ($join) {
                $join->on('empresas.id', '=', 'empresa_descontos.empresa_id')
                    ->where('empresa_descontos.status', 'ativo')
                    ->orWhere('empresa_descontos.id', 0);
            })
            ->join('empresa_taxas', function ($join) {
                $join->on('empresas.id', '=', 'empresa_taxas.empresa_id')
                    ->where('empresa_taxas.status', 'ativo')
                    ->orWhere('empresa_taxas.id', 0);
            })
            ->select('empresas.img_capa', 'empresas.pedido_minimo', 'empresas.pedido_maximo', 'empresas.pedido_status', 'empresas.proprio', 'empresas.balcao', 'empresas.pgt_dinheiro', 'empresas.pgt_cartao',
            'empresa_descontos.id as desconto_id', 'empresa_descontos.nome as desconto_nome', 'empresa_descontos.valor as desconto_valor',
            'empresa_taxas.id as taxa_id', 'empresa_taxas.nome as taxa_nome', 'empresa_taxas.valor as taxa_valor')
            ->where('empresas.id', $id)
            ->first();

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
